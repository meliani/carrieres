<?php

namespace App\Models\School\Profile;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship\Internship;

class People extends Model
{
    public $table = 'people';

    protected $dates = [
        'updated_at',
        'created_at'
    ];


    public $fillable = [

    ];

    public function user()
	{
		return $this->HasOne(User::class);
    }
    public function internship()
    {
        return $this->hasMany(Internship::class);
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
