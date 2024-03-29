<?php

namespace App\Models\Profile;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Person;
use App\Models\School\Internship\Advising;
use App\Models\School\Internship\Project;
use App\Models\School\Internship\Internship;
use App\Models\School\Branche;
class Professor extends Model
{
    protected $appends = [
        'full_name',
        'full_name_branche',
        'full_name_department',
    ];
    public function getFullNameAttribute($value)
    {
        return strtoupper($this->attributes['last_name']).' '.strtoupper($this->attributes['first_name']);
    }
    public function getFullNameBrancheAttribute($value)
    {
        return strtoupper($this->attributes['last_name']).' '.strtoupper($this->attributes['first_name']).' - '.$this->load('branche')->branche->short_title;
    }
    public function getFullNameDepartmentAttribute($value)
    {
        return strtoupper($this->attributes['last_name']).' '.strtoupper($this->attributes['first_name']).' - '.$this->department_title;
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
    public function projects()
	{
		return $this->hasMany(Project::class);
    }
    public function internships()
	{
		return $this->belongsToMany(Internship::class);
    }
}
