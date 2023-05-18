<?php
namespace App\Models\School\Project;

use App\Models\Core\baseModel as Model;
use App\Models\Profile\Student;
use App\Models\School\Internship\Adviser;
use App\Models\School\Internship\Internship;


class Project extends Model
{

     /**
     * hasMany internships
     * hasMany professors
     * hasMany students
     * 
     */

    // protected $table = 'internships';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','project_uuid', 'team_uuid'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
    protected $casts = [
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
    ];
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
    /* Old student working relationship */
/*     public function student()
    {
        return $this->belongsTo(Student::class,'student_id','user_id');
    } */
    public function student()
    {
        // return $this->belongsTo(Student::class,'student_id','user_id');
        // return $this->hasOneThrough(Student::class, Internship::class,);
        return $this->hasOneThrough(
            Student::class,              //Owner::class,
            Internship::class,          //Car::class,
            'id', // mechanic_id Foreign key on the cars table...
            'user_id', // car_id Foreign key on the owners table...
            'internship_id', // id Local key on the mechanics table...
            'user_id' // id Local key on the cars table...
        );
    }
    public function partners()
    {
        return $this->belongsTo(Project::class,'partner_project_id','id');
        /* 
        return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
        */
        // return $this->hasOneThrough(Student::class, Internship::class,);
    }



}
