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
    $projectGroups = \App\Project::all();
    $sliderImages = \App\SliderImage::all();
    $projectTypes = \App\ProjectType::all();
    $newsItems = \App\News::all();
    $clients = \App\Client::all();
    $teamMembers = \App\TeamMember::orderBy('order','asc')->get();

    $projects = \App\Project::with('projectTypes')->where('order', 1)
//        ->orderBy('order')
        ->orderBy('year', 'desc')
        ->groupBy('name')
        ->get();
    $portfolio = [];
    //$recentProjects = App\Project::where('year', '>', date('y') - 3)->get();

    foreach ($projects as $project) {
        $projectTypeClasses = [];

        //Append

        foreach ($project->projectTypes as $projectType) {
            $projectTypeClasses[] = snake_case($projectType->project_type);
        }

        $projectTypeClasses = implode(" ", $projectTypeClasses);
        if (date('Y') - $project->year <= 3) {
//dd(date('Y')-$project->year);
            $projectTypeClasses .= ' recent';
        }

        $portfolio[] = [
            'name'=> $project->name,
            'heading' => !empty($project->name) ? $project->name : 'Heading' . $project->id,
            'country' => $project->country,
            'project_id' => $project->id,
            'year' => $project->year,
            'short_describe' => 'Short project description',
            'thumb_image' => 'control-panel/images/projects/thumb/' . $project->id . '.jpg',
            'large_image' => 'control-panel/images/projects/' . $project->id . '.jpg',
            'categories' => $projectTypeClasses

        ];

    }


//    dd($sliderImages);
    return view('index', compact('sliderImages', 'generalContent', 'projectTypes', 'newsItems', 'portfolio', 'projects', 'clients', 'teamMembers', 'recentProjects', 'projectGroups'));
});

Route::post('/send-mail', 'GeneralContentsController@sendMail');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/control-panel', function () {
    return redirect()->to('control-panel/projects');
});

Route::group(['prefix' => 'control-panel' ,'middleware'=>'auth'], function () {

    Route::resource('/general-contents', 'GeneralContentsController');
    Route::resource('/projects', 'ProjectsController');
    Route::resource('/project-types', 'ProjectTypesController');
    Route::resource('/news', 'NewsController');
    Route::resource('/slider-images', 'SliderImagesController');
    Route::resource('/clients', 'ClientsController');
    Route::resource('/team-members', 'TeamMembersController');

});

Route::get('xxx', function(){
    $p = \App\Project::groupBy('name')->get();
    $projects = \App\Project::all();

    return [
        'group'=> $p,
        'projects'=> $projects->where('name', $p->first()->name)
    ];
});



Route::auth();

Route::get('/home', 'HomeController@index');
