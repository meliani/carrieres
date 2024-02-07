<?php

namespace App\Models\Profile;

use App\Models\Core\baseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Person extends baseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $connection = 'backend';

    protected $table = 'students';

    protected $primaryKey = 'id';

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
        // 'model_status_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /*
       public function setCvAttribute($value){
        $this->attributes['cv']=Storage::putFile('public/uploads/people/init_data/CVs', new File($value));
       }
       public function setLmAttribute($value){
        $this->attributes['lm']=Storage::putFile('public/uploads/people/init_data/LMs', new File($value));
       }
       public function setPhotoAttribute($value){
        $this->attributes['photo']=Storage::putFile('public/uploads/people/init_data/Photos', new File($value));
       }
       */
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

    /** Scopes */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('internship')
            ->useDisk('userfiles');
    }
}
