<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{

    public $table = 'internships';
    

    protected $dates = ['created_at',
                        'updated_at'
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
        'user_id'
    ];

    protected $casts = [

    ];
}
