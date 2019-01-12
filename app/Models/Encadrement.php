<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offresStages
 * @package App\Models
 * @version November 14, 2017, 11:11 am UTC
 *
 * @property string user_id
 *       'offre_de_stage_id',
 *       'cv',
 *       'lettre_de_motivation'
 */
class Encadrement extends Model
{
    //use SoftDeletes;

    public $table = 'viewencadrants';
    

    protected $dates = [
        'created_at'
    ];


    public $fillable = [
        'id',
        'id_prof',
        'studentName',
        'advisorName',
        'raison_sociale',
        'pays',
        'encadrant_ext_nom',
        'encadrant_ext_prenom',
        'encadrant_ext_tel',
        'encadrant_ext_mail',
        'intitule'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
