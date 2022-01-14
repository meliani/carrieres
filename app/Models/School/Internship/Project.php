<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship;

class Project extends Internship
{

     /**
     * hasMany internships
     * hasMany professors
     * hasMany students
     * 
     */

    protected $table = 'internships';

    public static function boot()
    {
        parent::boot();

        /**static::addGlobalScope(function ($query) {
            $query->where('status', '1');
        });*/
        static::addGlobalScope(function ($query) {
            $query->whereHas('person', function ($query) {
                $query->where('is_valid', 1)
                ->where('model_status_id', config('school.current.model_status.prod'));
            });
        });

    }


}
