<?php

namespace App\Models;

use Carbon\Carbon;

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

    protected $dates = [
        'created_at',
        'updated_at',
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
        'internship_category_id',
        'expire_at',
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
        'intitule_sujet'=> 'string',
        'descriptif'=> 'string',
        'mots_cles'=> 'string',
        'document_offre' => 'string',
        'is_valid' => 'boolean',
        'status' => 'integer',
        'internship_category_id' => 'nullable',
        'expire_at' => 'date',
        'applyable' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_responsable' => 'nullable',
        'raison_sociale' => 'required',
        'lieu_de_stage' => 'nullable',
        'fonction' => 'nullable',
        'telephone' => 'nullable|numeric',
        'email' => 'nullable|email',
        'intitule_sujet'=> 'nullable',
        'descriptif'=> 'nullable',
        'mots_cles'=> 'nullable',
        'document_offre' => 'nullable',
        'is_valid' => 'nullable',
        'status' => 'nullable',
        'internship_category_id' => 'nullable',
        'expire_at' => 'nullable',
        'applyable' => 'nullable'
    ];



/**
 * Model Relations
 */

	public function users()
	{
		return $this->belongsToMany('App\Models\User');
	}

    public function applications()
    {
        return $this->morphToMany('App\Models\Application', 'applyable');
        //return $this->hasMany('App\Models\Application', 'offre_de_stage_id', 'id');

    }
/**
 * Assecors end Mutators
 */

    public function getNomResponsableAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDescriptifAttribute($value)
    {
        return nl2br($value);
    }
    
    public function getLieuDeStageAttribute($value)
    {
        return nl2br($value);
    }
    public function getDocumentOffreAttribute($value)
    {
        if($value!=NULL)
            return "storage/uploads/Stages/Offres/".$value;
        else
            return NULL;
    }
    public function getExpireAtAttribute()
    {
        //Carbon::now();
        $date=$this->attributes['expire_at'];
        if(isset($date))
        {
        $expired_at=Carbon::parse($date);
        $elapse=$expired_at->diffInDays();
        if(Carbon::now()<$expired_at)
            //if expiring diffInHours ->diffForHumans()
            return "Expire ".$expired_at->diffForHumans();
        elseif(Carbon::now()>$expired_at)
            return "Expiré";
            //Here have to carbon now - expire_at in days
            //if expired echo expired
        else
            return NULL;
        }
        else {
            return NULL;
        }
    }
    /*
    public function getAttribute()
    {
        return NULL;
    }
*/

}
