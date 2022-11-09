<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Person;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
//use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\School\Internship;
use App\Models\School\Internship\internshipReport as Report;
use App\Models\School\schoolCycle as Cycle;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Student extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $table = 'people';
    protected $primaryKey = "user_id";

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
                $query->where('is_active', config('school.student.active'))
                ->where('model_status_id', config('school.current.model_status.prod'))
                ->where('year_id',config('school.current.year_id'));
        });
    }



    public function internship()
    {
        return $this->hasOne(Internship::class,'user_id','user_id');
        // ->with('adviser.adviser1.adviser2');
    }
    public function internships()
    {
        return $this->hasMany(Internship::class,'user_id','user_id');
    }
    public function user()
	{
		return $this->belongsTo(User::class,'id','user_id');
    }

    public function agreement()
    {
        return $this->hasOne(InternshipAgreement::class,'user_id','user_id');
    }
    
    public function report()
    {
        return $this->hasOne(Report::class,'user_id','user_id');
    }
    /**
     * Get the Events for the Student.
     */
    public function events()
    {
        return $this->belongsToMany(\app\Models\Event::class);
    }
    public function programs()
    {
        return $this->belongsToMany(\app\Models\Program::class);
    }
    public function years()
    {
        return $this->belongsToMany(\app\Models\Year::class,'student_year','user_id','year_id');
    }
/**
 * 
 * ********** Getters ***********
 */
    public function getNameAttribute($value)
	{
		return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    public function registerMediaCollections() :void
    {
        $this
           ->addMediaCollection('internship')
           ->useDisk('userfiles');
    }
    /**
     * Get all of the student's images.
     */
    public function media() :MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
