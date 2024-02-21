<?php

namespace App\Models\Profile;

use App\Models\School\Internship\Internship;
//use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Student extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $connection = 'backend_database';

    protected $table = 'careers_backend.students';

    protected $appends = [
        'full_name',
        'long_full_name',
    ];

    public $fillable = [
        'id',
        'title',
        'pin',
        'full_name',
        'first_name',
        'last_name',
        'email_perso',
        'phone',
        'cv',
        'lm',
        'photo',
        'birth_date',
        'level',
        'branche_id',
        'program',
        'is_mobility',
        'abroad_school',
        'year_id',
        'is_active',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        if (app()->isProduction()) {
            static::addGlobalScope(function ($query) {
                $query->where('year_id', config('school.current.year_id'));
                //->where('model_status_id', config('school.current.model_status.prod'))

                // ->where('is_active', config('school.student.active'))
            });
        }
    }

    public function internship()
    {
        return $this->hasOne(Internship::class);
    }

    public function setPin(Student $student, $currentPin, $streamOrder)
    {
        $student->pin = $streamOrder.str_pad($currentPin, 2, '0', STR_PAD_LEFT);
        $student->save();
    }

    public function getFullNameAttribute()
    {
        // dd($this->attributes);
        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    public function getLongFullNameAttribute()
    {
        return $this->getTitleAttribute().' '.$this->attributes['first_name'].' '.$this->attributes['last_name'];
    }

    public function getTitleAttribute()
    {

        if ($this->attributes['title'] == 'Mrs') {
            return 'Mme';
        } elseif ($this->attributes['title'] == 'Mr') {
            return 'M.';
        } else {
            return 'Mme/M.';
        }
    }

    public function activate()
    {
        $this->is_active = true;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('internship')
            ->useDisk('userfiles');
    }

    /**
     * Get all of the student's media.
     */
    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }
}
