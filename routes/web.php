<?php

Route::get('/home', 'HomeController@index')->name('home');
/* locale selector */
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
    });


Route::get('welcome', function () {
    return view('welcome');
    })->name('welcome');
Route::get('/', function () {
    return view('welcome');
    });

Auth::routes();

Route::middleware(['auth', 'Admin'])->group(function () {

    Route::view('extractions', 'extractions.index')->name('extractions');

    Route::namespace ('Admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('applications', ['as' => 'admin.applications.index', 'uses' => 'applicationsController@index']);
        });
    });
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('extractions/OffersApplications/{type}', 'extractions\AdminExportsController@OffersApplicationsExport')->middleware(['Admin']);
    Route::get('extractions/StagesExportAdvanced/{type}', 'extractions\AdminExportsController@AdvancedStagesExport')->middleware(['Admin']);
    Route::get('extractions/AdvisingStatsExport/{type}', 'extractions\AdminExportsController@AdvisingStatsExport')->middleware(['Admin']);
    Route::get('extractions/InternshipsExport/{type}', 'extractions\AdminExportsController@InternshipsExport')->middleware(['Admin']);
    Route::get('extractions/planningByProfessor/{type}', 'extractions\AdminExportsController@planningByProfessor')->middleware(['Admin']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('mesEncadrements', 'mesEncadrementsController');
    Route::get('pfeEncadrements/downloadExcel/{type}', 'StagesController@downloadExcel')->middleware(['Teacher']);
    Route::resource('Encadrements/mesEncadrements', 'Encadrement\EncadrementsController');
});

Route::get('Activation', ['as' => 'person.activate', 'uses' => 'Frontend\Profile\PersonController@activate'])->middleware(['auth']);

Route::resource('Authentic', 'Core\authenticDocumentController');
Route::get('url/{v}/{url}', 'Core\UrlController');

Route::
    namespace('Backend')
    ->name('backend.')
    ->group(function () {
        Route::prefix('~')->group(function () {
            Route::get('Dashboard', 'Dashboard');
            Route::resource('init', 'InitController');

            Route::namespace ('User')->group(function () {
                Route::resource('users', 'UserController');
                Route::resource('roles', 'RoleController');
                Route::resource('permissions', 'PermissionController');
            });
            Route::namespace ('Internship')->group(function () {
                Route::resource('defenses', 'DefenseController');
                Route::resource('plannings', 'PlanningsController');
                Route::resource('internships', 'InternshipController');
                Route::prefix('internships')->group(function () {
                    Route::resource('offers', 'InternOfferController');
                    Route::resource('binomes', 'BinomeController');
                    Route::resource('reports', 'ReportController');
                    Route::get('clone/{internship_id}/{user_id}', 'InternshipController@clone');
                    Route::get('agreements/{user_id}', 'GeneratedAgreementController@index');

                    Route::get('pedagogic_validation/{internship_id}', 'pedagogicValidationController@index');
                    Route::put('pedagogic_validation/{internship_id}', 'pedagogicValidationController@update');

                    Route::get('administration_signature/{internship_id}', 'AdministrationSignatureController@show');
                    Route::put('administration_signature/{internship_id}', 'AdministrationSignatureController@update');

                    Route::get('add_note/{internship_id}', 'NoteController@show');
                    Route::put('add_note/{internship_id}', 'NoteController@update');
                });
            });
            Route::namespace ('Project')->group(function () {
                Route::resource('projects', 'ProjectController');
            });
        });
    });
Route::resource('Sign', 'Frontend\Internship\SignController');

Route::namespace('Frontend')
    ->group(function () {
        // Route::resource('calendar', 'PlanningController');
        // Route::namespace('Team')->controller('teams', 'TeamsController');
        Route::namespace('Project')
        ->group(function () {
            Route::resource('teams', TeamController::class);
        });
        Route::namespace ('Student')
            ->prefix('students')
            ->group(function () {
                    Route::get('myDocuments/', 'myDocumentsController@index');
                });
        Route::namespace ('Internship')->group(function () {
            Route::resource('internships', 'myInternshipController');
            Route::prefix('internships')->group(function () {
                Route::resource('offers', 'InternOfferController');
                Route::prefix('offers')->group(function () {
                    Route::resource('applications', 'internshipApplicationController');
                });
            });
        });
    });
/************************************************************ USER MENU *******************************************************/
Route::get('myOffers', 'Frontend\Internship\InternOfferController@index')->name('myOffers');
Route::get('myApplications', 'Frontend\Internship\internshipApplicationController@index')->name('myApplications');

/****************************************** USER MENU END ********************************************************************/
Route::get('Checkpoint', 'Auth\CheckpointController');

Route::
    namespace ('Frontend\Profile')->middleware(['auth'])
    ->group(function () {
        Route::resource('person', 'PersonController');
        Route::get('profile/activation', 'PersonController@activate');
    });

Route::
    namespace ('Backend\User')
    ->group(function () {

    });
    
/****************************************** PUBLIC LINKS ********************************************************************/
Route::get('PlanningPFE', 'Frontend\IframeController@PlanningPFE');
Route::get('lesjeudis', 'Frontend\IframeController@PlanningJeudis');
Route::get('submit_offer', 'Frontend\Internship\InternOfferController@create', $internship_type = 2);
/****************************************** EOF PUBLIC LINKS ********************************************************************/
