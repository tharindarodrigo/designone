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
    $projectTypes = \App\ProjectType::all();
    $newsItems = \App\News::all();
    $clients = \App\Client::all();
    $teamMembers = \App\TeamMember::all();

    $projects = \App\Project::with('projectTypes')->get();
    $portfolio = [];
    $recentProjects = App\Project::where('year', '>', date('y') - 3)->get();

    foreach ($projects as $project) {
        $projectTypeClasses = [];

        //Append

        foreach ($project->projectTypes as $projectType) {
            $projectTypeClasses[] = snake_case($projectType->project_type);
        }

        $projectTypeClasses = implode(" ", $projectTypeClasses);
        if (date('y') - $project->year <= 3) {

            $projectTypeClasses .= ' recent';
        }

        $portfolio[] = [
            'heading' => !empty($project->name) ? $project->name : 'Heading' . $project->id,
            'country' => $project->country,
            'year' => $project->year,
            'short_describe' => 'Short project description',
            'thumb_image' => 'control-panel/images/projects/thumb/' . $project->id . '.jpg',
            'large_image' => 'control-panel/images/projects/' . $project->id . '.jpg',
            'categories' => $projectTypeClasses

        ];

    }


//    dd($sliderImages);
    return view('index', compact('sliderImages', 'generalContent', 'projectTypes', 'newsItems', 'portfolio', 'projects', 'clients', 'teamMembers'));
});

Route::post('/send-mail', 'GeneralContentsController@sendMail');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'control-panel'], function () {

    Route::get('/test', function () {
        return view('control-panel.test');
    });

    Route::resource('/general-contents', 'GeneralContentsController');
    Route::resource('/projects', 'ProjectsController');
    Route::resource('/project-types', 'ProjectTypesController');
    Route::resource('/news', 'NewsController');
    Route::resource('/slider-images', 'SliderImagesController');
    Route::resource('/clients', 'ClientsController');
    Route::resource('/team-members', 'TeamMembersController');

});


