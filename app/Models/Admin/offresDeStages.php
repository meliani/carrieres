<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offresDeStages
 * @package App\Models\Admin
 * @version November 16, 2017, 12:58 am UTC
 *
 * @property string nom_responsable
 * @property string raison_sociale
 * @property string lieu_de_stage
 * @property string fonction
 * @property string telephone
 * @property string email
 * @property string intitule_sujet
 * @property string descriptif
 * @property string mots_cles
 * @property string document_offre
 */
class offresDeStages extends Model
{
    use SoftDeletes;

    public $table = 'offres_de_stages';
    

    protected $dates = [
        'deleted_at',
        'expire_at'
        ];


    public $fillable = [
        'nom_responsable',
        'raison_sociale',
        'lieu_de_stage',
        'fonction',
        'telephone',
        'email',
        'intitule_sujet',
        'descriptif',
        'mots_cles',
        'document_offre',
        'is_valid',
        'status',
        'applyable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom_responsable' => 'string',
        'raison_sociale' => 'string',
        'lieu_de_stage' => 'string',
        'fonction' => 'string',
        'telephone' => 'string',
        'email' => 'string',
        'intitule_sujet' => 'string',
        'descriptif' => 'string',
        'mots_cles' => 'string',
        'document_offre' => 'string',
        'is_valid' => 'boolean',
        'status' => 'int',
        'applyable' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_responsable' => 'required',
        'raison_sociale' => 'required',
        'lieu_de_stage' => 'required',
        'fonction' => 'required',
        'telephone' => 'required|numeric',
        'email' => 'required',
        'intitule_sujet' => 'required',
        'descriptif' => 'required',
        'mots_cles' => 'required'
    ];

/**
 * Model Relations
 */

/**
 * public function users()
 *  {
 *   return $this->belongsToMany('App\Models\User');
 *  }
*/

public function applications()
{
    //return $this->morphToMany('App\Models\Application', 'applyable');
    return $this->hasMany('App\Models\Application', 'offre_de_stage_id', 'id');

}
}
