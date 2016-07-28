<?php

namespace App\Http\Controllers;

use App\ProjectType;
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
            $request->session()->flash('gobal-success', 'Successfully Created record');
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
            $request->session()->flash('global-success', 'Successfully Created record');
        }

        return $this->index();
    }

    public function destroy(Request $request, $id)
    {
        $projectType = ProjectType::findOrFail($id);
        if ($projectType->delete()) {
            $request->session()->flash('global-success', 'Record Deleted Successfully');
        } else {
            $request->session()->flash('global-danger', 'You cannot Delete this Record');
        }

        return $this->index();
    }
}
