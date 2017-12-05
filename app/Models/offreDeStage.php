<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offresStages
 * @package App\Models
 * @version November 14, 2017, 11:11 am UTC
 *
 * @property string nom_responsable
 * @property string raison_sociale
 * @property string lieu_de_stage
 * @property string fonction
 * @property string telephone
 * @property string email
 * @property string intitules_sujets
 * @property string mots_cles
 */
class offreDeStage extends Model
{
    use SoftDeletes;

    public $table = 'offres_de_stages';
    

    protected $dates = ['deleted_at'];


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
        'expire_at'
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
        'intitule_sujet'=> 'string',
        'descriptif'=> 'string',
        'mots_cles'=> 'string',
        'document_offre' => 'string',
        'is_valid' => 'boolean',
        'status' => 'integer',
        'expire_at' => 'timestamp'
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
        'email' => 'required|email',
        'intitule_sujet'=> 'required',
        'descriptif'=> 'required',
        'mots_cles'=> 'required',
        'document_offre' => 'nullable',
        'is_valid' => 'nullable',
        'status' => 'nullable',
        'expire_at' => 'nullable'
    ];

	public function users()
	{
		return $this->belongsToMany('App\Models\Application');
	} 
    
    public function applications()
    {
        return $this->morphToMany('App\Models\Application', 'applyable');
    }
}
