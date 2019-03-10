<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\School\Internship\Adviser;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\School\Profile\People;


class Internship extends Model
{

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

    protected $casts = [

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
        return $this->BelongsTo(People::class,'user_id','user_id')->where('scholar_year','=','2018-2019');
    }

}
