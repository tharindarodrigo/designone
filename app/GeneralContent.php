<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralContent extends Model
{
    public static $rules = [
        'phone1' => 'required|integer|min:10',
        'phone2' => 'required|integer|min:10',
        'address' => 'required',
        'email' => 'required|email',
        'fax' => 'required|integer|min:10',
    ];
}
