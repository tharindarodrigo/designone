<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public static $rules = [
        'client' => 'required',
        'client_logo' => 'required'
    ];

    public static $editrules = [
        'client' => 'required'
    ];
}
