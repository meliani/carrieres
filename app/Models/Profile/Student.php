<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile\Person;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

use App\Models\School\Internship;
use App\Models\School\Internship\internshipReport as Report;
use App\Models\School\schoolCycle as Cycle;

class Student extends Model implements HasMedia
{
    use HasMediaTrait;
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
        return $this->belongsToMany(\App\Event::class);
    }
    public function programs()
    {
        return $this->belongsToMany(\App\Program::class);
    }
    /**** a revoir cette relation cycle */
    public function cycle(){
        return $this->hasOneThrough(Cycle::class,App\Models\School\schoolCycle::class,'user_id','user_id');
    }
/**
 * 
 * ********** Getters ***********
 */
    public function getNameAttribute($value)
	{
		return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    public function registerMediaCollections()
    {
        $this
           ->addMediaCollection('internship')
           ->useDisk('userfiles');
    }
    /**
     * Get all of the student's images.
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'model');
    }
}
