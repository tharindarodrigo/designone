<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('control-panel.clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Client::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $client = new Client();
        $client->client = $request->get('client');

        if ($client->save()) {
            if ($image = Input::file('client_logo')) {
                Image::make($image)
                    ->encode('jpg')
                    ->save('control-panel/images/clients/' . $client->id . '.jpg');
            }

            $request->session()->flash('global-success', "Record deleted successfully");

        }

        return $this->index();

    }

    public function edit($id)
    {
        $clients = Client::all();
        $client = Client::find($id);
        return view('control-panel.clients.edit', compact('client', 'clients'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), Client::$editRules);

        if ($validator->fails()) {
            return redirect('control-panel.clients.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $client = Client::find($id);
        $client->client = $request->get('client');
        $client->status = $request->has('status') ? $request->get('status') : 1;

        if ($client->update()) {

            if ($image = Input::file('client')) {
                Image::make($image)
                    ->encode('jpg')
                    ->save('control-panel/images/clients/' . $id . '.jpg');
            }

            return $this->index();

        }

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        try {
            $client = Client::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global-warning', "The Record wasn't found");
            return redirect()->back();
        }

        if ($client->delete()) {
            if (file_exists(public_path() . '/control-panel/images/clients/' . $id . '.jpg')) {
                unlink('control-panel/images/clients/' . $id . '.jpg');
            }

            $request->session()->flash('global-success', "Record deleted successfully");
        }
        return $this->index();
    }
}
