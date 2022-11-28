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

Route::middleware(['auth','Admin'])->group(function () {

Route::view('extractions','extractions.index')->name('extractions');

Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::prefix('admin')->group(function () {
        Route::get('applications', ['as'=> 'admin.applications.index', 'uses' => 'applicationsController@index']);


    
    });
});
 

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    // Admin Extraction routes :
    Route::get('extractions/OffersApplications/{type}','extractions\AdminExportsController@OffersApplicationsExport')->middleware(['Admin']);
    Route::get('extractions/StagesExportAdvanced/{type}','extractions\AdminExportsController@AdvancedStagesExport')->middleware(['Admin']);
    Route::get('extractions/AdvisingStatsExport/{type}','extractions\AdminExportsController@AdvisingStatsExport')->middleware(['Admin']);
    Route::get('extractions/InternshipsExport/{type}','extractions\AdminExportsController@InternshipsExport')->middleware(['Admin']);
    Route::get('extractions/planningByProfessor/{type}','extractions\AdminExportsController@planningByProfessor')->middleware(['Admin']);


});

Route::middleware(['auth'])->group(function () {

    //Route::resource('pfeEncadrements', 'pfeEncadrementsController');
    Route::resource('mesEncadrements', 'mesEncadrementsController');

    Route::get('pfeEncadrements/downloadExcel/{type}','StagesController@downloadExcel')->middleware(['Teacher']);

    Route::resource('Encadrements/mesEncadrements', 'Encadrement\EncadrementsController');

});

    

    Route::get('/home', 'HomeController@index')->name('home');

    /* locale selector */
    Route::get('language/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    });
    
/* we did this at the beginning and now here is this one ont top */
/*     Route::get('/{locale?}', function ($locale = null) {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        
        return view('welcome');
    }); */
    /* end of locale selector */

/*     Route::get('welcome/{locale}', function ($locale) {
        App::setLocale($locale);
        return view('welcome');
        //
    });
    */
    Route::get('welcome', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('/', function () {
        return view('welcome');
    });

Auth::routes();

Route::namespace('Internship')->group(function () {
    // Controllers Within The "App\Http\Controllers\Internship" Namespace
    Route::prefix('Internship')->group(function () {
});
/*     Route::prefix('Internship/Advising')->group(function () {
        Route::resource('Project', 'AdvisingController');
        Route::resource('Jury', 'JuryController');
    }); */
});
// Route::resource('Internship/Advising/Stats', 'Internship\StatsController');

Route::get('Activation', ['as'=> 'person.activate', 'uses' => 'Frontend\Profile\PersonController@activate'])->middleware(['auth']);

Route::resource('Authentic', 'Core\authenticDocumentController');
Route::get('url/{v}/{url}', 'Core\UrlController');

Route::get('test', function(){
    }
);

//Route::get('url/{url}', 'Core\UrlController');


/** ----------- New nomenclature for routes ------------- */

Route::namespace('Backend')
->name('backend.')
->group(function () {
    Route::prefix('-')->group(function () {
        Route::resource('events', 'EventController');
        Route::get('Dashboard', 'Dashboard');
        Route::namespace('Internship')->group(function () {
            Route::resource('defenses', 'DefenseController');
            Route::resource('plannings', 'PlanningsController');
            Route::resource('internships', 'InternshipController');
            Route::prefix('internships')->group(function () {
                Route::resource('offers', 'OfferController');
                Route::resource('binomes', 'BinomeController');
                Route::resource('reports', 'ReportController');
                Route::get('clone/{internship_id}/{user_id}', 'InternshipController@clone');
                Route::get('agreements/{user_id}','GeneratedAgreementController@index');
                // Route::resource('pedagogic_validation','pedagogicValidationController');
                Route::get('pedagogic_validation/{internship_id}','pedagogicValidationController@index');
                Route::put('pedagogic_validation/{internship_id}','pedagogicValidationController@update');
                // Route::resource('administration_signature','AdministrationSignatureController');
                Route::get('administration_signature/{internship_id}','AdministrationSignatureController@show');
                Route::put('administration_signature/{internship_id}','AdministrationSignatureController@update');
                Route::get('add_note/{internship_id}','NoteController@show');
                Route::put('add_note/{internship_id}','NoteController@update');
            });
        }); 
    });
});

Route::resource('Sign', 'Frontend\Internship\SignController');

Route::namespace('Frontend')
->group(function () {
    // Controllers Within The "App\Http\Controllers\Frontend" Namespace
    Route::resource('events', 'EventController');
    Route::namespace('Student')
    ->prefix('students')
    ->group(function () {
        Route::get('myDocuments/', 'myDocumentsController@index');
    });
    Route::namespace('Internship')->group(function () {
            // Controllers Within The "App\Http\Controllers\Frontend\Internship" Namespace

        Route::get('internships/clone/{id}/{user_id?}', 'myInternshipController@clone');
        Route::resource('internships', 'myInternshipController');
    Route::prefix('internships')->group(function () {

        Route::resource('binomes', 'BinomeController');
        Route::resource('offers', 'internOfferController');
        Route::resource('reports', 'internshipReportController');
        Route::prefix('offers')->group(function () {
            Route::resource('applications', 'internshipApplicationController');
            });
        });
    });
});

Route::get('rapport', 'Frontend\Internship\internshipReportController@create');

/********************************* USER MENU ****************
 * 
 * some specific pages 
 * 
*/
Route::get('Events', 'Backend\EventController@index')->name('Events');

Route::get('myEvents', 'Frontend\EventController@index')->name('myEvents');
Route::get('myOffers', 'Frontend\Internship\internOfferController@index')->name('myOffers');
Route::get('myApplications', 'Frontend\Internship\internshipApplicationController@index')->name('myApplications');

/****************************************** USER MENU END */

/***************** Backend menu ********************/
Route::get('reports_manager', 'Backend\Internship\ReportController@index')->name('reports_manager');
/********** End Backend links */

Route::get('Checkpoint', 'Auth\CheckpointController');

Route::namespace('Frontend\Profile')->middleware(['auth'])
->group(function () {
Route::resource('person', 'PersonController');
Route::get('profile/activation', 'PersonController@activate');
});

Route::namespace('Backend\User')
->group(function () {
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
});

//Route::get('PlanningPFE2019', 'Backend\Internship\PlanningsController@index');
Route::get('PlanningPFE', 'Frontend\IframeController@PlanningPFE');
Route::get('lesjeudis', 'Frontend\IframeController@PlanningJeudis');

Route::get('submit_offer', 'Frontend\Internship\internOfferController@create',$internship_type=2);

Route::get('AutorisationSoutenance', function(){
    return redirect('https://carrieres.inpt.ac.ma/Survey/index.php/295393');
});