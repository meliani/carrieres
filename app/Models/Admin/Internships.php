<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Internships
 * @package App\Models\Admin
 * @version November 30, 2018, 5:37 pm UTC
 *
 * @property \App\Models\Admin\users users
 * @property string raison_sociale
 * @property string adresse
 * @property string ville
 * @property string pays
 * @property string parrain_titre
 * @property string parrain_nom
 * @property string parrain_prenom
 * @property string parrain_fonction
 * @property string parrain_tel
 * @property string parrain_mail
 * @property string encadrant_ext_titre
 * @property string encadrant_ext_nom
 * @property string encadrant_ext_prenom
 * @property string encadrant_ext_fonction
 * @property string encadrant_ext_tel
 * @property string encadrant_ext_mail
 * @property string encadrant_int_titre
 * @property string encadrant_int_nom
 * @property string encadrant_int_prenom
 * @property string encadrant_int_mail
 * @property string co_encadrant_int_titre
 * @property string co_encadrant_int_nom
 * @property string co_encadrant_int_prenom
 * @property string co_encadrant_int_mail
 * @property string intitule
 * @property string descriptif
 * @property string keywords
 * @property date date_debut
 * @property date date_fin
 * @property string foreign
 * @property string remuneration
 * @property string charge
 * @property integer user_id
 */
class Internships extends Model
{
    use SoftDeletes;

    public $table = 'internships';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'raison_sociale' => 'string',
        'adresse' => 'string',
        'ville' => 'string',
        'pays' => 'string',
        'parrain_titre' => 'string',
        'parrain_nom' => 'string',
        'parrain_prenom' => 'string',
        'parrain_fonction' => 'string',
        'parrain_tel' => 'string',
        'parrain_mail' => 'string',
        'encadrant_ext_titre' => 'string',
        'encadrant_ext_nom' => 'string',
        'encadrant_ext_prenom' => 'string',
        'encadrant_ext_fonction' => 'string',
        'encadrant_ext_tel' => 'string',
        'encadrant_ext_mail' => 'string',
        'encadrant_int_titre' => 'string',
        'encadrant_int_nom' => 'string',
        'encadrant_int_prenom' => 'string',
        'encadrant_int_mail' => 'string',
        'co_encadrant_int_titre' => 'string',
        'co_encadrant_int_nom' => 'string',
        'co_encadrant_int_prenom' => 'string',
        'co_encadrant_int_mail' => 'string',
        'intitule' => 'string',
        'descriptif' => 'string',
        'keywords' => 'string',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'foreign' => 'string',
        'remuneration' => 'string',
        'charge' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'raison_sociale' => 'required',
        'adresse' => 'required',
        'ville' => 'required',
        'pays' => 'required',
        'parrain_titre' => 'required',
        'parrain_nom' => 'required',
        'parrain_prenom' => 'required',
        'parrain_fonction' => 'required',
        'parrain_tel' => 'required',
        'parrain_mail' => 'email',
        'encadrant_ext_titre' => 'required',
        'encadrant_ext_nom' => 'required',
        'encadrant_ext_prenom' => 'required',
        'encadrant_ext_fonction' => 'required',
        'encadrant_ext_tel' => 'required',
        'encadrant_ext_mail' => 'email',
        'encadrant_int_titre' => 'required',
        'encadrant_int_nom' => 'required',
        'encadrant_int_prenom' => 'required',
        'encadrant_int_mail' => 'email',
        'intitule' => 'required',
        'descriptif' => 'required',
        'keywords' => 'required',
        'date_debut' => 'required',
        'date_fin' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'user_id', 'id');
    }
}
