<?php

namespace App\Models\School\Internship;


use Illuminate\Database\Eloquent\Model;

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
    


    public $fillable = [
        'user_id',
        'offre_de_stage_id',
        'file_cv',
        'file_cover_letter'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'offer_id' => 'string',
        'file_cv' => 'string',
        'file_cover_letter' => 'string',
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
        'date'=> 'datetime',    
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'offer_id' => 'required',
        'file_cv' => 'nullable',
        'file_cover_letter' => 'nullable'
    ];
    // !!!!!!! what is this relation ???

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function offer()
    {
        return $this->belongsTo('App\Models\Offer','offer_id','id');
    }

}
