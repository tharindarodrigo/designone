<?php

namespace App\Http\Controllers;

use App\TeamMember;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class TeamMembersController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('control-panel.team-members.index', compact('teamMembers'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), TeamMember::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $teamMember = new TeamMember();
        $teamMember->name= $request->get('name');
        $teamMember->designation= $request->get('designation');
        $teamMember->status = $request->has('status') ? $request->get('status') : 1 ;

        if ($teamMember->save()) {
            if ($image = Input::file('team_member_image')) {
                Image::make($image)
                    ->encode('jpg')
                    ->save('control-panel/images/team-members/' . $teamMember->id . '.jpg');
            }

            $request->session()->flash('global-success', "Record added successfully");

        }

        return $this->index();

    }

    public function edit($id)
    {
        $teamMembers = TeamMember::all();
        $teamMember = TeamMember::find($id);
        return view('control-panel.team-members.edit', compact('teamMember', 'teamMembers'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), TeamMember::$editRules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $teamMember = TeamMember::find($id);
        $teamMember->name= $request->get('name');
        $teamMember->designation= $request->get('designation');
        $teamMember->status = $request->has('status') ? $request->get('status') : 1 ;

        if ($teamMember->update()) {

            if ($image = Input::file('team_member_image')) {
                Image::make($image)
                    ->encode('jpg')
                    ->save('control-panel/images/team-members/' . $id . '.jpg');
            }

            $request->session()->flash('global-success', "Record added successfully");

            return $this->index();

        }

        $request->session()->flash('global-danger', "Image Upload failed");


        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        try {
            $teamMember = TeamMember::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', "The Record wasn't found");
            return redirect()->back();
        }

        if ($teamMember->delete()) {
            if (file_exists(public_path() . '/control-panel/images/team-members/' . $id . '.jpg')) {
                unlink('control-panel/images/team-members/' . $id . '.jpg');
            }

            $request->session()->flash('global-success', "Record deleted successfully");
        }

        return $this->index();
    }
}
