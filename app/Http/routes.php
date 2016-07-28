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
//    $sliderImages = \App\GeneralContent::all();
    $generalContent = App\GeneralContent::find(1);
    $sliderImages = \App\SliderImage::all();

//    dd($sliderImages);
    return view('index', compact('sliderImages', 'generalContent'));
});



Route::group(['prefix'=>'control-panel'], function(){

    Route::get('/test', function () {
        return view('control-panel.test');
    });


    Route::resource('/general-contents', 'GeneralContentsController');
    Route::resource('/projects', 'ProjectsController');
    Route::resource('/project-types', 'ProjectTypesController');
    Route::resource('/news', 'NewsController');
    Route::resource('/slider-images', 'SliderImagesController');
});
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');
