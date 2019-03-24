<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public static $rules=[
        'country' => 'required',
        'year' => 'required',
        'project_type' => 'required',
        'project_photo' => 'required|image'
//        'order'=>''
    ];

    public static $editRules = [
        'country' => 'required',
        'year' => 'required',
        'project_type' => 'required',
        'project_photo' => 'image'
    ];
    
    
    /**
     * Relationships
     */

    public function projectTypes()
    {
        return $this->belongsToMany('App\ProjectType');
    }
    
}
