<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});



Route::group(['prefix'=>'control-panel'], function(){

    Route::get('/test', function () {
        return view('control-panel.test');
    });


    Route::resource('/general', 'GeneralContentsController');
    Route::resource('/projects', 'ProjectsController');
    Route::resource('/news', 'NewsController');
    Route::resource('/slider-images', 'SliderImagesController');
});
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');
