<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\School\Internship\Adviser;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\School\Profile\People;
use Collective\Html\Eloquent\FormAccessible;


class Internship extends Model
{
    use FormAccessible;     

    use SoftDeletes;

    public $table = 'internships';
    

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
        'nbr_advisors'
    ];
    //protected $dateFormat = 'm/d/Y';
    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
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
    public function user()
	{
		return $this->BelongsTo(User::class,'user_id','id');
    }
    public function adviser()
    {
        return $this->hasOne(Adviser::class,'id_internship');
    }
    public function people()
    {
        return $this->BelongsTo(People::class,'user_id','user_id');
    }

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
    public function getDureeAttribute($gender)
	{
        //return $this->date_fin->diffForHumans($this->date_debut);
        return $this->date_fin->longAbsoluteDiffForHumans($this->date_debut);
    }
    
}
