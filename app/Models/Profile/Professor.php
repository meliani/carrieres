<?php

namespace App\Models\Profile;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Person;
use App\Models\School\Internship\Advising;
use App\Models\School\Internship\Project;
use App\Models\School\Internship;

class Professor extends Model
{
    protected $appends = [
        'name',
    ];
    public function getFullNameAttribute($value)
    {
        return strtoupper($this->attributes['last_name']).' '.strtoupper($this->attributes['first_name']);
    }

    public function is_available($date,$time){
        
        /*$internships= Internship::Where('defense_at',$date)
        ->Where('defense_start_time',$time)->with(array('professors' => function($query)
        {
            $query->where('professor_id', $this->id); 
        }))->get();*/
        /*$internships= Internship::Where('defense_at',$date)
        ->Where('defense_start_time',$time)->professors()->wherePivot('professor_id',$this->id);
        foreach ($internships as $internship) {
            if($internship->pivot->professor_id)
            return 'no';
        }*/
        if(empty($internships))
        return 'yes';
        else return 'no';
    }
    // ******************** LOVE CIRCLES (SCOPES) ************************ //

    public function scopeActive($query) {
        return $query->where('is_active', true);
    }
    // ******************** LOVE RELATIONSHIPS ************************ //
    public function user()
	{
		return $this->belongsTo(User::class,'id','id');
    }
    public function person()
	{
		return $this->belongsTo(Person::class,'user_id','id');
    }
    public function projects()
	{
		return $this->hasMany(Project::class);
    }
    public function advisings()
	{
		return $this->hasMany(Advising::class);
    }
    public function internships()
	{
		return $this->belongsToMany(Internship::class)->withPivot('advising_type','user_id','professor_id','internship_id');
    }
}
