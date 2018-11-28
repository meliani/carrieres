<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
class Application extends Model
{
    //use SoftDeletes;

    public $table = 'applications';
    

    protected $dates = [
        'created_at',
        'updated_at'
    ];


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
    public function applyable()
    {
        return $this->morphTo();
    }

}
