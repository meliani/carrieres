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
class Application extends Model
{
    use SoftDeletes;

    public $table = 'applications';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'offre_de_stage_id',
        'cv',
        'lettre_de_motivation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'offre_de_stage_id' => 'string',
        'cv' => 'string',
        'lettre_de_motivation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'offre_de_stage_id' => 'required',
        'cv' => 'nullable',
        'lettre_de_motivation' => 'nullable'
    ];

    public function offresDeStages()
    {
        return $this->morphedByMany('App\Models\offreDeStage', 'applyable');
    }

}
