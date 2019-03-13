<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\School\Profile\People;
use App\Models\School\Internship\Internship;
use App\Models\School\Internship\Adviser;

use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mysql';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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
    public static function getProfessors()
    {
        return User::where('is_professor',1)->orderBy('name')->get(['id','name'])->pluck('name','id')->all();
    }

    public function applications()
    {
        return $this->morphToMany('App\Models\Application', 'applyable');
        //return $this->hasMany('App\Models\Application', 'user_id', 'id');
    }
    public function people()
    {
        return $this->hasOne(People::class,'user_id','id');
    }
    public function internship()
    {
        return $this->hasOne(Internship::class);
    }
    public function adviser()
    {
        return $this->hasOne(Adviser::class,'id_prof');
    }

}
