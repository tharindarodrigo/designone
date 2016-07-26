<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    public static $rules = [
        'title'=>'required',
        'description'=>'required',
        'slider_image'=>'required|image'
    ];

    public static $editRules = [
        'title'=>'required',
        'description'=>'required'
    ];
}
