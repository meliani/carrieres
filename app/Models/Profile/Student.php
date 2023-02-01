<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Person;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
//use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\School\Internship\Internship;
use App\Models\School\Internship\internshipReport as Report;
use App\Models\School\Internship\Project;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\School\Stream;

class Student extends Person implements HasMedia
{
    use InteractsWithMedia;
    protected $table = 'people';
    protected $primaryKey = "id";

    protected $appends = [
        'full_name',
     ];
    public static function boot()
    {
        parent::boot();

        /**static::addGlobalScope(function ($query) {
            $query->where('status', '1');
        });*/
        // app()->isLocal()
        //app()->environment(['local', 'staging','local']))
        
        if(app()->isProduction()){
         static::addGlobalScope(function ($query) {
                $query->where('is_active', config('school.student.active'))
                ->where('model_status_id', config('school.current.model_status.prod'))
                ->where('year_id',config('school.current.year_id'));
        });
    }
    }

    public function setPin(Student $student,$currentPin, $streamOrder){
        $student->pin = $streamOrder.str_pad($currentPin, 2, "0", STR_PAD_LEFT);
        $student->save();
    }

    public function internship()
    {
        return $this->hasOne(Internship::class);
        // ->with('adviser.adviser1.adviser2');
    }
    public function agreement()
    {
        return $this->hasOne(InternshipAgreement::class,'student_id');
    }
    public function stream()
    {
        return $this->belongsTo(Stream::class);
    }
    /**
     * Get the Events for the Student.
     */
    public function events()
    {
        return $this->belongsToMany(\App\Models\Event::class);
    }
    public function programs()
    {
        return $this->belongsToMany(\App\Models\Program::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class,'id','student_id');
    }
/**
 * 
 * ********** Getters ***********
 */
/*     public function getFull_NameAttribute($value)
	{
		return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    } */

    public function registerMediaCollections() :void
    {
        $this
           ->addMediaCollection('internship')
           ->useDisk('userfiles');
    }
    /**
     * Get all of the student's media.
     */
    public function media() :MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
