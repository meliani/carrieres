<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\School\Internship\Adviser;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Profile\Person;
use App\Models\Profile\Student;
use App\Models\Profile\Professor;
use Collective\Html\Eloquent\FormAccessible;
use App\Models\School\Internship\Defense;
use App\Models\School\Internship\Advising;


class Internship extends Model
{
    use FormAccessible;     

    use SoftDeletes;

    protected $table = 'internships';

    protected static function boot()
    {
        parent::boot();
    
        static::addGlobalScope(function ($query) {
                $query->orderBy('created_at', 'asc');
        });

    }

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
        'encadrant_int_titre',
        'encadrant_int_nom',
        'encadrant_int_prenom',
        'encadrant_int_mail',
        'co_encadrant_int_titre',
        'co_encadrant_int_nom',
        'co_encadrant_int_prenom',
        'co_encadrant_int_mail',
        'intitule',
        'descriptif',
        'keywords',
        'date_debut',
        'date_fin',
        'foreign',
        'remuneration',
        'charge',
        'user_id',
        'nbr_advisors',
        'time_slot_id',
        'classroom_id',
        'defense_start_time',
        'defense_end_time',
        'defense_at',
    ];
    //protected $dateFormat = 'm/d/Y';
    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
        'defense_at' => 'date',
        'defense_start_time' => 'time:H:i',
        'defense_end_time' => 'time:H:i',

    ];
    protected static $rules = [
        'raison_sociale' => 'required|max:191',
        'intitule' => 'required|max:191',
        'adresse' => 'required|max:191',
        'descriptif' => 'required|max:191',
        'keywords' => 'required|max:191',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date',
        'parrain_titre' => 'required|max:191',
        'parrain_nom' => 'required|max:191',
        'parrain_prenom' => 'required|max:191',
        'parrain_fonction' => 'required|max:191',
        'parrain_tel' => 'required|max:191',
        'parrain_mail' => 'required|email',
        'encadrant_ext_titre' => 'required|max:191',
        'encadrant_ext_nom' => 'required|max:191',
        'encadrant_ext_prenom' => 'required|max:191',
        'encadrant_ext_fonction' => 'required|max:191',
        'encadrant_ext_tel' => 'required|max:191',
        'encadrant_ext_mail' => 'required|email',
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
		return $this->belongsTo(App\Year::class);
	}
    public function program()
	{
		return $this->belongsTo(App\Program::class);
    }
    public function professor()
	{
        return $this->hasOne('App\User', 'id', 'is_signed');

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
    public function getTitle($gender)
	{
        if($gender==1)
        return "Mr.";
        else
        return "Mme.";
    }
    public function getDureeAttribute()
	{
        //return $this->date_fin->diffForHumans($this->date_debut);
        //return $this->date_fin->longAbsoluteDiffForHumans($this->date_debut,null,7);
        return $this->date_fin->diffInWeeks($this->date_debut).' semaines';

    }
    
}
