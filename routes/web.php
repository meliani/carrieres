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

        Route::resource('users', 'usersManager\UserController');
    
        Route::resource('roles', 'usersManager\RoleController');
    
        Route::resource('permissions', 'usersManager\PermissionController');
    
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

Auth::routes();

Route::namespace('Internship')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::prefix('Internship/Advising')->group(function () {
        Route::resource('Project', 'AdvisingController');
        Route::resource('Jury', 'JuryController');
    });
});
Route::resource('Internship/Advising/Stats', 'Internship\StatsController');

Route::get('Activation', ['as'=> 'people.activate', 'uses' => 'School\PeopleController@activate']);

Route::resource('Authentic', 'Core\authenticDocumentController');
Route::get('test', function(){
    }
);

//Route::get('url/{url}', 'Core\UrlController');


/** ----------- New nomenclature for routes ------------- */

Route::namespace('Backend')
->name('backend.')
->group(function () {
    Route::prefix('-')->group(function () {
        Route::get('Dashboard', 'Dashboard');
        Route::namespace('Internship')->group(function () {
            Route::resource('internships', 'InternshipController');
            Route::prefix('internships')->group(function () {
            });
        }); 
    });
});

Route::namespace('Frontend')
->group(function () {
    // Controllers Within The "App\Http\Controllers\Frontend" Namespace
    Route::namespace('Student')
    ->prefix('students')
    ->group(function () {
        Route::get('myDocuments/', 'myDocumentsController@index');
    });
    Route::namespace('Internship')->group(function () {
        Route::get('internships/clone/{id}', 'myInternshipController@clone');
        Route::resource('internships', 'myInternshipController');
    Route::prefix('internships')->group(function () {
        Route::resource('binomes', 'BinomeController');
        Route::resource('offers', 'internshipOfferController');
        Route::prefix('offers')->group(function () {
            Route::resource('applications', 'internshipApplicationController');
            }); 
        });
    });
});


//Route::get('Checkpoint', 'Auth\Checkpoint');

Route::namespace('Frontend\Profile')
->group(function () {
Route::resource('person', 'PersonController');
Route::get('profile/activation', 'PersonController@activate');
});