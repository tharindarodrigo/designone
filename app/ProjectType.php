<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    public static $rules = [
        'project_type' => 'required'
    ];


    /**
     * Relationships
     */

    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
}
