<?php

namespace App\Models\School\Profile;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Models\School\Profile\Professor;
use App\Models\School\Profile\Student;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class People extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $table = 'people';
    protected $primaryKey = "user_id";
    protected $appends = [
        'name',
     ];
    protected $dates = [
        'updated_at',
        'created_at'
    ];


    public $fillable = [ 	
    'id',
    'user_id',
    'title',
    'first_name',
    'last_name',
    'email',
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


   public function setCvAttribute($value){

    upload($value,[
        'var_name' =>'cv',
        'upload_path' => 'uploads/people/init_data/CVs'
        ]);
   } 
   public function getNameAttribute($value)
	{
		return $this->attributes['first_name'].' '.$this->attributes['last_name'];
    }
   public function getTitleAttribute($value)
	{
        if($this->attributes['gender_id']==0)
		return "Mme.";
        else
		return "Mr.";
    }    
    public function activate(){
        $this->is_active=true;
        $this->save();
    }
    public function user()
	{
		return $this->belongsTo(User::class,'id','user_id');
    }

    public function internship()
    {
        return $this->hasOne(Internship::class,'user_id','user_id')->with('adviser');
    }
    public function professor()
    {
        return $this->hasOne(Professor::class,'id','user_id');
    }
    public function student()
    {
        return $this->hasOne(Student::class,'id','user_id');
    }

    /** Scopes */
    public function scopeActive($query) {
        return $query->where('is_active', true);
     }


     public function registerMediaCollections()
     {
         $this
            ->addMediaCollection('internship')
            ->useDisk('userfiles');
     }
}
