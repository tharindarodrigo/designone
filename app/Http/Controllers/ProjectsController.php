<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ProjectsController extends Controller
{
//private $_model;
//
//    public function __construct()
//    {
//        $this->_model = new Project();
//    }

    public function index()
    {

//        dd($this->_model->find(1));

        //dd('hello');
        $projects = Project::all();
        return view('control-panel.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->country = $request->get('country');
        $project->year = $request->get('year');
        $project->type = $request->get('type');

//        dd(Input::file('project_photo'));

        if ($project->save()) {
            if ($image = Input::file('project_photo')) {
                Image::make($image)
                    ->save('images/projects/' . $project->id . '.jpg');

            }
        }

        return $this->index();

    }

    public function edit($id)
    {
        $projects = Project::all();
        $project = Project::find($id);
        return view('control-panel.projects.edit', compact('projects', 'project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->country = $request->get('country');
        $project->year = $request->get('year');
        $project->type = $request->get('type');

        if ($project->save()) {
            if ($image = Input::file('project_photo')) {
                Image::make($image)
                    ->save('images/projects/' . $project->id . '.jpg');
            }
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

        if ($project->delete()) {
            if (file_exists(public_path() . '/images/projects/' . $id . '.jpg')) {
                unlink('images/projects/' . $id . '.jpg');
            }

            $request->session()->flash('global', "Record deleted successfully");
        }
        return redirect()->back();
    }
}
