<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('admin/offres_de_stages', 'Admin\offresDeStagesAPIController@index');
Route::post('admin/offres_de_stages', 'Admin\offresDeStagesAPIController@store');
Route::get('admin/offres_de_stages/{offres_de_stages}', 'Admin\offresDeStagesAPIController@show');
Route::put('admin/offres_de_stages/{offres_de_stages}', 'Admin\offresDeStagesAPIController@update');
Route::patch('admin/offres_de_stages/{offres_de_stages}', 'Admin\offresDeStagesAPIController@update');
Route::delete('admin/offres_de_stages{offres_de_stages}', 'Admin\offresDeStagesAPIController@destroy');

Route::get('admin/report_submissions', 'Admin\reportSubmissionAPIController@index');
Route::post('admin/report_submissions', 'Admin\reportSubmissionAPIController@store');
Route::get('admin/report_submissions/{report_submissions}', 'Admin\reportSubmissionAPIController@show');
Route::put('admin/report_submissions/{report_submissions}', 'Admin\reportSubmissionAPIController@update');
Route::patch('admin/report_submissions/{report_submissions}', 'Admin\reportSubmissionAPIController@update');
Route::delete('admin/report_submissions{report_submissions}', 'Admin\reportSubmissionAPIController@destroy');