<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship;

class Project extends Internship
{


    protected $table = 'internships';

    public static function boot()
    {
        parent::boot();

        /**static::addGlobalScope(function ($query) {
            $query->where('status', '1');
        });*/
        static::addGlobalScope(function ($query) {
            $query->whereHas('person', function ($query) {
                $query->where('scholar_year', '=', '2018-2019');
            });
        });
    }


}
