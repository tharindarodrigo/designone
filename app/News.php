<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //

    public $fillable = ['title','date','news'];

    public static $rules = [
      'title'=>'required',
      'date'=>'required',
      'news'=>'required'
    ];

}
