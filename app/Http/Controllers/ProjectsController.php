<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ProjectsController extends Controller
{


    public function index()
    {
        $projects = Project::with('projectTypes')->get();
        return view('control-panel.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), Project::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $project = new Project();
        $project->name = $request->get('name');
        $project->country = $request->get('country');
        $project->order = $request->get('order');
        $project->year = $request->get('year');

        if ($project->save()) {
            $project->project_type = $request->get('project_type');

            $project->projectTypes()->attach($project->project_type);

            if ($image = Input::file('project_photo')) {


                $x = Image::make($image);
                $width = $x->width();
                $length = $x->height();

                $x = $x->encode('jpg');

                if ($width > $length) {
                    if ($width > 1280) {
                        $x = $x->resize(1280, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                } else {
                    if ($length > 1280) {
                        $x = $x->resize(null, 1280, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                }


                $x->save('control-panel/images/projects/' . $project->id . '.jpg');

                Image::make($image)
                    ->resize(null, 480, function($constraint){
                        $constraint->aspectRatio();
                    })
                    ->resizeCanvas(640, null)
//                    ->resizeCanvas(320, null, 'center', true, '333333')
                    ->encode('jpg')
                    ->save('control-panel/images/projects/thumb/' . $project->id . '.jpg');
            }
        }

        return $this->index();

    }

    public function edit($id)
    {
        $projects = Project::all();
        $project = Project::find($id);
        $checkedProjectTypes = [];
        foreach ($project->ProjectTypes as $projectType) {
            $checkedProjectTypes[] = $projectType->id;
        }

        return view('control-panel.projects.edit', compact('projects', 'project', 'checkedProjectTypes'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), Project::$editRules);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $project = Project::find($id);
        $project->name = $request->get('name');
        $project->country = $request->get('country');
        $project->order = $request->get('order');
        $project->year = $request->get('year');

        if ($project->update()) {

            $project->projectTypes()->sync($request->get('project_type'));

            if ($image = Input::file('project_photo')) {
                $x = Image::make($image);
                $width = $x->width();
                $length = $x->height();

                $x = $x->encode('jpg');

                if ($width > $length) {
                    if ($width > 1280) {
                        $x = $x->resize(1280, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                } else {
                    if ($length > 1280) {
                        $x = $x->resize(null, 1280, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                }


                $x->save('control-panel/images/projects/' . $project->id . '.jpg');

//                Image::make($image)
//                    ->resize(320, 240)
//                    ->encode('jpg')
//                    ->save('control-panel/images/projects/thumb/' . $project->id . '.jpg');

                Image::make($image)
                    ->resize(null, 480, function($constraint){
                        $constraint->aspectRatio();
                    })
                    ->resizeCanvas(640, null)
//                    ->resizeCanvas(320, null, 'center', true, '333333')
                    ->encode('jpg')
                    ->save('control-panel/images/projects/thumb/' . $project->id . '.jpg');
            }

            return $this->index();

        }

        return $this->index();
    }

    public function destroy(Request $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', "The Record wasn't found");
            return redirect()->back();
        }

        $project->projectTypes()->detach();

        if ($project->delete()) {
            if (file_exists(public_path() . '/control-panel/images/projects/' . $id . '.jpg')) {
                File::delete('control-panel/images/projects/' . $id . '.jpg');
            }

            $request->session()->flash('global-success', "Record deleted successfully");
        }
        return redirect()->route('control-panel.projects.index');
    }
}
