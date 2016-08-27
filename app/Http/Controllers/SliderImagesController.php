<?php

namespace App\Http\Controllers;

use App\SliderImage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SliderImagesController extends Controller
{
    public function index()
    {
        $sliderImages = SliderImage::all();
        return view('control-panel.slider-images.index', compact('sliderImages'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), SliderImage::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $sliderImage = new SliderImage();
        $sliderImage->title = $request->get('title');
        $sliderImage->description = $request->get('description');
        $sliderImage->status = $request->has('status') ? $request->get('status') : 1 ;

        if ($sliderImage->save()) {
            if ($image = Input::file('slider_image')) {
                Image::make($image)
                    ->encode('jpg')
                    ->save('control-panel/images/slider-images/' . $sliderImage->id . '.jpg');
            }

            $request->session()->flash('global-success', "Record added successfully");

        }

        return $this->index();

    }

    public function edit($id)
    {
        $sliderImages = SliderImage::all();
        $sliderImage = SliderImage::find($id);
        return view('control-panel.slider-images.edit', compact('sliderImage', 'sliderImages'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), SliderImage::$editRules);

        if ($validator->fails()) {
            return redirect('control-panel.slider-images.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $sliderImage = SliderImage::find($id);
        $sliderImage->title = $request->get('title');
        $sliderImage->description = $request->get('description');
        $sliderImage->status = $request->has('status') ? $request->get('status') : 1;

        if ($sliderImage->update()) {

            if ($image = Input::file('slider_image')) {
                Image::make($image)
                    ->encode('jpg')
                    ->save('control-panel/images/slider-images/' . $id . '.jpg');
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
            $sliderImage = SliderImage::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global', "The Record wasn't found");
            return redirect()->back();
        }

        if ($sliderImage->delete()) {
            if (file_exists(public_path() . '/control-panel/images/slider-images/' . $id . '.jpg')) {
                unlink('control-panel/images/slider-images/' . $id . '.jpg');
            }

            $request->session()->flash('global-success', "Record deleted successfully");
        }

        return $this->index();
    }
}
