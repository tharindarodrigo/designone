<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    public static $rules = [
        'order'=> 'numeric'
    ];

    public static $editRules = [

    ];
}
