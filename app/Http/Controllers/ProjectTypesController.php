<?php

namespace App\Http\Controllers;

use App\ProjectType;
use Illuminate\Contracts\Encryption\EncryptException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ProjectTypesController extends Controller
{
    public function index()
    {
        $projectTypes = ProjectType::all();
        return view('control-panel.project-types.index', compact('projectTypes'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), ProjectType::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $projectType = new ProjectType();

        $projectType->project_type = $request->get('project_type');

        if ($projectType->save()) {
            $request->session()->flash('global-success', 'Successfully Created record');
        }

        return $this->index();
    }

    public function edit($id)
    {
        $projectTypes = ProjectType::all();
        $projectType = ProjectType::find($id);

        return view('control-panel.project-types.edit', compact('projectType', 'projectTypes'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), ProjectType::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $projectType = ProjectType::findOrFail($id);

        $projectType->project_type = $request->get('project_type');

        if ($projectType->save()) {
            $request->session()->flash('global-success', 'Successfully Updated record');
        }

        return $this->index();
    }

    public function destroy(Request $request, $id)
    {


        try {
            $projectType = ProjectType::with('projects')->findOrFail($id);
            if ($projectType->projects()->count()) {
                $request->session()->flash('global-danger', "There are Projects added to This category");
                return redirect()->back();
            }
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global-danger', $e);
            return redirect()->back();
        }

        if ($projectType->delete()) {
            $request->session()->flash('global-success', 'Record Deleted Successfully');

        } else {
            $request->session()->flash('global-warning', 'Problem Deleting Record');
        }

        return redirect()->route('control-panel.project-types.index');
    }
}
