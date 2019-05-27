<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Person;
use App\Models\School\Internship;

class Student extends Model
{
    protected $table = 'people';
    protected $appends = [
        'name',
     ];
    public static function boot()
    {
        parent::boot();

        /**static::addGlobalScope(function ($query) {
            $query->where('status', '1');
        });*/
        static::addGlobalScope(function ($query) {
                $query->where('is_active', true);
        });
    }

    public $fillable = [ 	
        'user_id',
        'title',
        'first_name',
        'last_name',
        'email_perso',
        'phone',
        'cv',
        'lm',
        'photo',
        'option_id',
        'gender_id',
        'birth_date',
        'filiere_text',
        'option_text',
        'konosys_id',
        'ine',
        'is_active',
        'scholar_year',
        'pfe_id'
        ];

    public function internship()
    {
        return $this->hasOne(Internship::class,'user_id','user_id')
        ->with('adviser.adviser1.adviser2');
    }
    public function agreement()
    {
        return $this->hasOne(InternshipAgreement::class,'user_id','user_id');
    }
    public function getNameAttribute($value)
	{
		return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

}
