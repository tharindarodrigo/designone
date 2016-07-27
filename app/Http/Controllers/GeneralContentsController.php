<?php

namespace App\Http\Controllers;

use App\GeneralContent;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class GeneralContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            GeneralContent::findOrFail(1);
            return redirect()->route('control-panel.general-contents.edit', [1]);

        } catch (ModelNotFoundException $e) {
            return view('control-panel.general-content.index');
        }
    }

    public function store(Request $request)
    {
        $generalContent = new GeneralContent();
//        dd($request->all());
        $generalContent->phone1 = $request->get('phone1');
        $generalContent->phone2 = $request->get('phone2');
        $generalContent->address = $request->get('address');
        $generalContent->email = $request->get('email');
        $generalContent->about = $request->get('about');
        $generalContent->fax = $request->get('fax');

        if ($generalContent->save()) {
            $request->session()->flash('global-success', 'Successfully saved');
        } else {
            $request->session()->flash('global-error', 'The Item was not found');
        }

        return $this->index();
    }

    public function edit($id)
    {
        $generalContent = GeneralContent::find($id);
        return view('control-panel.general-content.edit', compact('generalContent'));
    }

    public function update(Request $request, $id)
    {
        try {
            $generalContent = GeneralContent::find($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global-error', 'The Item was not found');
            return $this->index();
        }

        $generalContent->phone1 = $request->get('phone1');
        $generalContent->phone2 = $request->get('phone2');
        $generalContent->address = $request->get('address');
        $generalContent->email = $request->get('email');
        $generalContent->about = $request->get('about');
        $generalContent->fax = $request->get('fax');

        if ($generalContent->update()) {
            $request->session()->flash('global-success', 'Successfully saved');
        } else {
            $request->session()->flash('global-error', 'The Item was not found');
        }

        return $this->index();
    }


}
