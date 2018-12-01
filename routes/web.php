<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::middleware(['isAdmin'])->group(function () {
    Route::get('admin/applications', ['as'=> 'admin.applications.index', 'uses' => 'Admin\applicationsController@index']);

    Route::get('admin/offresDeStages', ['as'=> 'admin.offresDeStages.index', 'uses' => 'Admin\offresDeStagesController@index']);
    Route::post('admin/offresDeStages', ['as'=> 'admin.offresDeStages.store', 'uses' => 'Admin\offresDeStagesController@store']);
    Route::get('admin/offresDeStages/create', ['as'=> 'admin.offresDeStages.create', 'uses' => 'Admin\offresDeStagesController@create']);
    Route::put('admin/offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.update', 'uses' => 'Admin\offresDeStagesController@update']);
    Route::patch('admin/offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.update', 'uses' => 'Admin\offresDeStagesController@update']);
    Route::delete('admin/offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.destroy', 'uses' => 'Admin\offresDeStagesController@destroy']);
    Route::get('admin/offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.show', 'uses' => 'Admin\offresDeStagesController@show']);
    Route::get('admin/offresDeStages/{offresDeStages}/edit', ['as'=> 'admin.offresDeStages.edit', 'uses' => 'Admin\offresDeStagesController@edit']);
    Route::post('admin/offresDeStages/{offresDeStages}/activate', ['as'=> 'admin.offresDeStages.activate', 'uses' => 'Admin\offresDeStagesController@activate']);

    Route::resource('users', 'Admin\UserController');

    Route::resource('roles', 'RoleController');

    Route::resource('permissions', 'PermissionController');

    Route::resource('posts', 'PostController');

    Route::get('admin/reportSubmissions', ['as'=> 'admin.reportSubmissions.index', 'uses' => 'Admin\reportSubmissionController@index']);
    Route::post('admin/reportSubmissions', ['as'=> 'admin.reportSubmissions.store', 'uses' => 'Admin\reportSubmissionController@store']);
    Route::get('admin/reportSubmissions/create', ['as'=> 'admin.reportSubmissions.create', 'uses' => 'Admin\reportSubmissionController@create']);
    Route::put('admin/reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.update', 'uses' => 'Admin\reportSubmissionController@update']);
    Route::patch('admin/reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.update', 'uses' => 'Admin\reportSubmissionController@update']);
    Route::delete('admin/reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.destroy', 'uses' => 'Admin\reportSubmissionController@destroy']);
    Route::get('admin/reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.show', 'uses' => 'Admin\reportSubmissionController@show']);
    Route::get('admin/reportSubmissions/{reportSubmissions}/edit', ['as'=> 'admin.reportSubmissions.edit', 'uses' => 'Admin\reportSubmissionController@edit']);

});

Route::middleware(['auth'])->group(function () {
    Route::get('monStage', ['as'=> 'monStage.index', 'uses' => 'monStageController@index']);
    Route::get('monStage/{monStage}', ['as'=> 'monStage.show', 'uses' => 'monStageController@show']);
    Route::get('monStage/postuler/{monStage}', ['as'=> 'monStage.postuler', 'uses' => 'monStageController@postuler']);
    Route::post('monStage/postuler/{monStage}', ['as'=> 'monStage.postuler', 'uses' => 'monStageController@postuler']);
    Route::post('monStage/postuler/{monStage}', ['as'=> 'monStage.store', 'uses' => 'monStageController@store']);
    //Route::('monStage', 'monStageController');

    //Route::get('monStage/edocs', ['as'=> 'monStage.edocs', 'uses' => 'monStageController@edocs']);
    Route::get('monStage/edocs',['as'=> 'monStage.edocs'], function () {
        return view('monStage.edocs');
    });
    Route::get('monStage/guide',['as'=> 'monStage.guide'], function () {
        return view('monStage.guide');
    });

    Route::get('offresDeStages', ['as'=> 'offresDeStages.index', 'uses' => 'offresDeStagesController@index']);

    Route::get('edocs', ['as'=> 'edocs.index', 'uses' => 'edocsController@index']);

    Route::resource('internship', 'InternshipController');
    Route::resource('profile', 'ProfileController');
});


    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('welcome/{locale}', function ($locale) {
        App::setLocale($locale);
        return view('welcome');
        //
    });

    Route::get('/', function () {
        return view('welcome');
    });


    Route::post('offresStages', ['as'=> 'offresDeStages.store', 'uses' => 'offresDeStagesPFEController@store']);
    Route::get('offresStages', ['as'=> 'offresDeStages.create', 'uses' => 'offresDeStagesPFEController@create']);
    Route::post('offresDeStages', ['as'=> 'offresStages.store', 'uses' => 'offresDeStagesPFEController@store']);
    Route::get('offresDeStages/create', ['as'=> 'offresStages.create', 'uses' => 'offresDeStagesPFEController@create']);

    Route::post('offreDeStage', ['as'=> 'offreDeStage.store', 'uses' => 'offreDeStageController@store']);
    Route::get('offreDeStage/create', ['as'=> 'offreDeStage.create', 'uses' => 'offreDeStageController@create']);
    Route::get('stageTechnique2018', ['as'=> 'offreDeStage.create', 'uses' => 'offreDeStageController@create']);

Auth::routes();





Route::get('rapport', ['as'=> 'reportSubmissions.index', 'uses' => 'reportSubmissionController@index']);
Route::post('reportSubmissions', ['as'=> 'reportSubmissions.store', 'uses' => 'reportSubmissionController@store']);
Route::get('reportSubmissions/create', ['as'=> 'reportSubmissions.create', 'uses' => 'reportSubmissionController@create']);



Route::get('admin/internships', ['as'=> 'admin.internships.index', 'uses' => 'Admin\InternshipsController@index']);
Route::post('admin/internships', ['as'=> 'admin.internships.store', 'uses' => 'Admin\InternshipsController@store']);
Route::get('admin/internships/create', ['as'=> 'admin.internships.create', 'uses' => 'Admin\InternshipsController@create']);
Route::put('admin/internships/{internships}', ['as'=> 'admin.internships.update', 'uses' => 'Admin\InternshipsController@update']);
Route::patch('admin/internships/{internships}', ['as'=> 'admin.internships.update', 'uses' => 'Admin\InternshipsController@update']);
Route::delete('admin/internships/{internships}', ['as'=> 'admin.internships.destroy', 'uses' => 'Admin\InternshipsController@destroy']);
Route::get('admin/internships/{internships}', ['as'=> 'admin.internships.show', 'uses' => 'Admin\InternshipsController@show']);
Route::get('admin/internships/{internships}/edit', ['as'=> 'admin.internships.edit', 'uses' => 'Admin\InternshipsController@edit']);
