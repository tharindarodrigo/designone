<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public static $rules=[
        'country' => 'required',
        'year' => 'required',
        'type' => 'required',
        'project_photo' => 'required|image'
    ];

    public static $editRules = [
        'country' => 'required',
        'year' => 'required',
        'type' => 'required',
        'project_photo' => 'image'
    ];
}
