<?php

namespace App\Models\School\Profile;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship\Internship;

class People extends Model
{
    public $table = 'people';
    protected $primaryKey = "user_id";

    protected $dates = [
        'updated_at',
        'created_at'
    ];


    public $fillable = [ 	
    'id',
    'user_id',
    'title',
    'fname',
    'lname',
    'email',
    'phone',
    'cv',
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

   public function getNameAttribute($value)
	{
		return $this->attributes['fname'].' '.$this->attributes['lname'];
    }


    public function user()
	{
		return $this->BelongsTo(User::class,'id','user_id');
    }

    public function internship()
    {
        return $this->hasOne(Internship::class,'user_id','user_id')->with('adviser')
        ->latest();
    }



    public static function getProfessors()
    {
        $queries = User::select('id','name')->where('is_professor','=',1)->get();

        $results = array();
        foreach ($queries as $query)
        {
            $results[$query->id] = $query->name;
        }

        return $results;
    }
}
