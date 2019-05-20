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

Route::middleware(['auth','isAdmin'])->group(function () {

Route::view('extractions','extractions.index')->name('extractions');

Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::prefix('admin')->group(function () {
        Route::get('applications', ['as'=> 'admin.applications.index', 'uses' => 'applicationsController@index']);

        Route::get('offresDeStages', ['as'=> 'admin.offresDeStages.index', 'uses' => 'offresDeStagesController@index']);
        Route::post('offresDeStages', ['as'=> 'admin.offresDeStages.store', 'uses' => 'offresDeStagesController@store']);
        Route::get('offresDeStages/create', ['as'=> 'admin.offresDeStages.create', 'uses' => 'offresDeStagesController@create']);
        Route::put('offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.update', 'uses' => 'offresDeStagesController@update']);
        Route::patch('offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.update', 'uses' => 'offresDeStagesController@update']);
        Route::delete('offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.destroy', 'uses' => 'offresDeStagesController@destroy']);
        Route::get('offresDeStages/{offresDeStages}', ['as'=> 'admin.offresDeStages.show', 'uses' => 'offresDeStagesController@show']);
        Route::get('offresDeStages/{offresDeStages}/edit', ['as'=> 'admin.offresDeStages.edit', 'uses' => 'offresDeStagesController@edit']);
        Route::post('offresDeStages/{offresDeStages}/activate', ['as'=> 'admin.offresDeStages.activate', 'uses' => 'offresDeStagesController@activate']);
    
        Route::resource('users', 'usersManager\UserController');
    
        Route::resource('roles', 'usersManager\RoleController');
    
        Route::resource('permissions', 'usersManager\PermissionController');
    
        Route::get('reportSubmissions', ['as'=> 'admin.reportSubmissions.index', 'uses' => 'reportSubmissionController@index']);
        Route::post('reportSubmissions', ['as'=> 'admin.reportSubmissions.store', 'uses' => 'reportSubmissionController@store']);
        Route::get('reportSubmissions/create', ['as'=> 'admin.reportSubmissions.create', 'uses' => 'reportSubmissionController@create']);
        Route::put('reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.update', 'uses' => 'reportSubmissionController@update']);
        Route::patch('reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.update', 'uses' => 'reportSubmissionController@update']);
        Route::delete('reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.destroy', 'uses' => 'reportSubmissionController@destroy']);
        Route::get('reportSubmissions/{reportSubmissions}', ['as'=> 'admin.reportSubmissions.show', 'uses' => 'reportSubmissionController@show']);
        Route::get('reportSubmissions/{reportSubmissions}/edit', ['as'=> 'admin.reportSubmissions.edit', 'uses' => 'reportSubmissionController@edit']);
    
        Route::get('internships', ['as'=> 'admin.internships.index', 'uses' => 'InternshipsController@index']);
        Route::post('internships', ['as'=> 'admin.internships.store', 'uses' => 'InternshipsController@store']);
        Route::get('internships/create', ['as'=> 'admin.internships.create', 'uses' => 'InternshipsController@create']);
        Route::put('internships/{internships}', ['as'=> 'admin.internships.update', 'uses' => 'InternshipsController@update']);
        Route::patch('internships/{internships}', ['as'=> 'admin.internships.update', 'uses' => 'InternshipsController@update']);
        Route::delete('internships/{internships}', ['as'=> 'admin.internships.destroy', 'uses' => 'InternshipsController@destroy']);
        Route::get('internships/{internships}', ['as'=> 'admin.internships.show', 'uses' => 'InternshipsController@show']);
        Route::get('internships/{internships}/edit', ['as'=> 'admin.internships.edit', 'uses' => 'InternshipsController@edit']);
    });
});
 

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    // Admin Extraction routes :
    Route::get('extractions/OffersApplications/{type}','extractions\AdminExportsController@OffersApplicationsExport')->middleware(['Teacher']);
    Route::get('extractions/StagesExportAdvanced/{type}','extractions\AdminExportsController@AdvancedStagesExport')->middleware(['Teacher']);
    Route::get('extractions/AdvisingStatsExport/{type}','extractions\AdminExportsController@AdvisingStatsExport')->middleware(['Teacher']);
    Route::get('extractions/InternshipsExport/{type}','extractions\AdminExportsController@InternshipsExport')->middleware(['Teacher']);


});

Route::middleware(['auth'])->group(function () {

    //Route::resource('pfeEncadrements', 'pfeEncadrementsController');
    Route::resource('mesEncadrements', 'mesEncadrementsController');

    Route::get('pfeEncadrements/downloadExcel/{type}','StagesController@downloadExcel')->middleware(['Teacher']);

    Route::resource('Encadrements/mesEncadrements', 'Encadrement\EncadrementsController');

});

    

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('welcome/{locale}', function ($locale) {
        App::setLocale($locale);
        return view('welcome');
        //
    });
    Route::get('welcome', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('/', function () {
        return view('welcome');
    });


Route::get('offresDeStages', ['as'=> 'offresDeStages.create', 'uses' => 'offresDeStagesPFEController@create']);
Route::post('offresDeStages', ['as'=> 'offresDeStages.store', 'uses' => 'offresDeStagesPFEController@store']);
Route::get('offresDeStages/create', ['as'=> 'offresDeStages.create', 'uses' => 'offresDeStagesPFEController@create']);
Route::get('offresDeStages/thanks', ['as'=> 'offresDeStages.thanks', 'uses' => 'offresDeStagesPFEController@thanks']);

Auth::routes();





Route::get('rapport', ['as'=> 'reportSubmissions.index', 'uses' => 'reportSubmissionController@index']);
Route::post('reportSubmissions', ['as'=> 'reportSubmissions.store', 'uses' => 'reportSubmissionController@store']);
Route::get('reportSubmissions/create', ['as'=> 'reportSubmissions.create', 'uses' => 'reportSubmissionController@create']);



Route::namespace('Internship')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::prefix('Internship/Advising')->group(function () {
        Route::resource('Project', 'AdvisingController');
        Route::resource('Jury', 'JuryController');
    });
});
Route::resource('People', 'School\PeopleController');
Route::resource('Internship/Advising/Stats', 'Internship\StatsController');

Route::get('Activation', ['as'=> 'people.activate', 'uses' => 'School\PeopleController@activate']);
Route::resource('Authentic', 'Core\authenticDocumentController');
Route::get('test', function(){
    return view('frontend.documents.excel.templates.internships');
    }
);
Route::get('test2', function(){
    return view('backend.internship.advising.index');
    });
    Route::get('test3', function(){
        return view('backend.internship.create');
        });


    Route::namespace('Backend')->group(function () {
        Route::prefix('students')->group(function () {

        });
    });
   /** ----------- New nomenclature for routes ------------- */

    Route::namespace('Frontend')->group(function () {
        // Controllers Within The "App\Http\Controllers\Frontend" Namespace
        Route::namespace('Student')->group(function () {
            Route::prefix('students')->group(function () {
                Route::get('myDocuments/', 'myDocumentsController@index');
            });
        });
        Route::namespace('Internship')->group(function () {
            Route::get('internships/duplicate/{id}', 'myInternshipController@copy');
            Route::resource('internships', 'myInternshipController');
        Route::prefix('internships')->group(function () {
            Route::resource('offers', 'internshipOfferController');
            Route::prefix('offers')->group(function () {
                Route::resource('applications', 'internshipApplicationController');
                }); 
            });
        });
    });