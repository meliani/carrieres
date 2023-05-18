<?php

namespace App\Models\Profile;

use App\Models\Core\baseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship\Internship;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Profile\Professor;
use App\Models\Profile\Student;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class Person extends baseModel implements HasMedia
{
    use InteractsWithMedia;
    protected $table = 'people';
    protected $primaryKey = "id";
    protected $appends = [
        'full_name',
        'long_full_name'
     ];


    public $fillable = [ 	
    'id',
    'gender_id',
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
    'program_id',
    'branche_id',
    'filiere_text',
    'is_mobility',
    'abroad_school',
    'year_id',
    'is_active',
    'model_status_id'
    ];
    protected $casts = [
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
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

        if($this->attributes['gender_id']==0)
		return "Mme";
        elseif($this->attributes['gender_id']==1)
		return "M.";
        else
		return "Mme/M.";
    }
    public function activate(){
        $this->is_active=true;
        $this->save();
    }
    public function user()
	{
		return $this->belongsTo(User::class,'id','id');
    }

    /** Scopes */
    public function scopeActive($query) {
        return $query->where('is_active', true);
     }


     public function registerMediaCollections() :void
     {
         $this
            ->addMediaCollection('internship')
            ->useDisk('userfiles');
     }
}
