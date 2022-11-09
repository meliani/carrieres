<?php

namespace App\Models\School;

use App\Models\Core\baseModel;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\School\Internship\Adviser;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profile\Person;
use App\Models\Profile\Student;
use App\Models\Profile\Professor;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\School\Internship\Defense;
use App\Models\School\Internship\Advising;


class Internship extends baseModel
{
    use FormAccessible;     

    use SoftDeletes;

    protected $table = 'internships';


    protected static function boot()
    {
        parent::boot();
    
        static::addGlobalScope(function ($query) {
                $query->where('year_id', config('school.current.year_id'))
                ->orderBy('created_at', 'asc');
        });

    }

    protected $attributes = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public $fillable = [
        'id',
        'raison_sociale',
        'adresse',
        'ville',
        'pays',
        'office_location',
        'parrain_titre',
        'parrain_nom',
        'parrain_prenom',
        'parrain_fonction',
        'parrain_tel',
        'parrain_mail',
        'encadrant_ext_titre',
        'encadrant_ext_nom',
        'encadrant_ext_prenom',
        'encadrant_ext_fonction',
        'encadrant_ext_tel',
        'encadrant_ext_mail',
        'intitule',
        'descriptif',
        'keywords',
        'date_debut',
        'date_fin',
        'abroad',
        'remuneration',
        'currency',
        'load',
        'abdoard_school',
        'int_adviser_id',
        'int_adviser_name',
        'is_signed',
        'user_id',
        'year_id',
        'is_valid',
        'model_status_id'
    ];

    //protected $dateFormat = 'm/d/Y';
    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
        'defense_at' => 'date',
        'defense_start_time' => 'time:H:i',
        'defense_end_time' => 'time:H:i',

    ];
    
    
    /** --------------------------------- Relations ----------------------------- */
    public function binome()
    {
        return $this->belongsTo(Student::class,'binome_user_id','user_id');
    }
    public function groupes()
    {
        return $this->belongsToMany(Person::class,'internship_groupes','internship_id','user_id');
    }
    public function user()
	{
		return $this->belongsTo(User::class,'user_id','id');
    }
    public function adviser()
    {
        return $this->hasOne(Adviser::class,'id_internship');
    }
    public function person()
    {
        return $this->belongsTo(Person::class,'user_id','user_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'user_id','user_id');
    }
    public function defense()
    {
        return $this->hasOne(Defense::class);
    }
    public function professors()
	{
        return $this->hasMany(Professor::class)
        ->withPivot('advising_type','user_id','professor_id','internship_id');
    }
    public function year()
	{
		return $this->belongsTo(App\Models\Year::class);
	}
    public function program()
	{
		return $this->belongsTo(App\Models\Program::class);
    }
    public function professor()
	{
        return $this->hasOne('App\Models\User', 'id', 'is_signed');

    }
    /** ---------------------------------  Getters ----------------------------- */
    public function getParrainNameAttribute()
	{
		return $this->getTitle($this->parrain_titre).' '.$this->parrain_nom.' '.$this->parrain_prenom;
    }
    public function getEncadrantExtNameAttribute()
	{
		return $this->getTitle($this->encadrant_ext_titre).' '.$this->encadrant_ext_nom.' '.$this->encadrant_ext_prenom;
    }

    public function getDureeAttribute()
	{
        //return $this->date_fin->diffForHumans($this->date_debut);
        //return $this->date_fin->longAbsoluteDiffForHumans($this->date_debut,null,7);
        return $this->date_fin->diffInWeeks($this->date_debut).' semaines';

    }
    
}
