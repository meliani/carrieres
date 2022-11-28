<?php

namespace App\Models\School\Internship;

use App\Models\Core\baseModel;
use App\Models\Profile\Student;
use App\Models\School\Internship\Adviser;
use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship;

class Project extends baseModel
{

     /**
     * hasMany internships
     * hasMany professors
     * hasMany students
     * 
     */

    // protected $table = 'internships';

    public static function boot()
    {
        parent::boot();

        /**static::addGlobalScope(function ($query) {
            $query->where('status', '1');
        });*/
/*         static::addGlobalScope(function ($query) {
            $query->whereHas('person', function ($query) {
                $query->where('is_valid', 1)
                ->where('model_status_id', config('school.current.model_status.prod'));
            });
        }); */

    }
    public function advisers()
    {
        return $this->hasMany(Adviser::class,'project_id','id');
    }
/*     public function advisers()
    {
        return $this->belongsTo(Adviser::class,'id','project_id');
    } */
    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','user_id');
    }


}
