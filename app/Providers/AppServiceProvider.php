<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        \Carbon\Carbon::setLocale(config('app.locale'));

        // Laravel strict mode // wait until 9 upgrade
        // Model::shouldBeStrict(! $this->app->isProduction());
        
    Model::preventLazyLoading(! $this->app->isProduction());
    // Model::preventSilentlyDiscardingAttributes(); // throwing error
    // Model::preventsAccessingMissingAttributes(); // throwing error


        Relation::morphMap([
            'internship' => 'App\Models\School\Internship',
        ]);
        \Spatie\Flash\Flash::levels([
            'success' => 'alert-success',
            'warning' => 'alert-warning',
            'error' => 'alert-error',
        ]);

/*          // trying to add a new valdiation rule
            Validator::extend('valid_date_range', function ($attribute, $value, $parameters, $validator) {

            $dateBeginning = New Carbon($parameters[0]); // do confirm the date format.
        
            $dateEnd = New Carbon($value);
        
            return $dateBeginning->diffInMonths($dateEnd) == $parameters[1];
        }); */

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
