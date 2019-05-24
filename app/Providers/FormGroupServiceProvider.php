<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormGroupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('textGroup','components.forms.text', ['params','errors']);
        Form::component('selectGroup','components.forms.select', ['params','errors']);
        Form::component('fileGroup','components.forms.file', ['params','errors']);

    }
}
