<?php

namespace App\Models;

use App\Models\Profile\Person;
use App\Models\Profile\Student;
use App\Models\School\Internship\Adviser;
use App\Models\School\Internship\Internship;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

// use App\Notifications\Auth\VerifyEmail;

class User extends Authenticatable
{
    use \App\Traits\Auth\CanResetPassword;
    use HasRoles;
    use Notifiable;

    protected $connection = 'backend_database';

    protected $table = 'students';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getIsAdminAttribute()
    {
        return $this->attributes['is_admin'];
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = $password;
    }

    protected $appends = [
        'full_name',
    ];

    public function getNameAttribute()
    {
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }
    /*     public static function getProfessors()
        {
            return User::where('is_professor',1)->orderBy('name')->get(['id','name'])->pluck('name','id')->all();
        } */

    public function applications()
    {
        return $this->morphToMany('App\Models\School\Internship\Application', 'applyable');
        //return $this->hasMany('App\Models\School\Internship\Application', 'user_id', 'id');
    }

    public function person()
    {
        return $this->hasOne(Person::class, 'id', 'id');
    }

    public function student()
    {
        return $this->hasOne(Student::class, 'id', 'id');
    }

    public function internships()
    {
        return $this->hasMany(Internship::class);
    }
    /*     public function adviser1()
        {
            return $this->hasMany(Adviser::class,'id_prof');
        }
        public function adviser2()
        {
            return $this->hasMany(Adviser::class,'id_encad2');
        }
        public function examiner1()
        {
            return $this->hasMany(Adviser::class,'id_exami1');
        }
        public function examiner2()
        {
            return $this->hasMany(Adviser::class,'id_exami2');
        }
        public function examiner3()
        {
            return $this->hasMany(Adviser::class,'id_exami3');
        } */

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    // public function sendEmailVerificationNotification()
    // {
    //     $this->notify(new VerifyEmail);
    // }
}
