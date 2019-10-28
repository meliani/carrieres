<?php

namespace App\Models\School\Internship;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Core\baseModel;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
class internshipOffer extends baseModel
{
    use SoftDeletes;

    //protected $morphClass = 'internshipOffer';
    protected $dates = [
        'created_at',
        'updated_at',
            'deleted_at',
            'expire_at'
                        
    ];


    public $fillable = [
        'internship_type',
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
        'expire_at' => 'nullable',
        'applyable' => 'nullable'
    ];



/**
 * Model Relations
 */

	public function user()
	{
		return $this->belongsTo('App\User');
	}
    public function application()
    {
        return $this->hasMany('App\Models\School\Internship\Application', 'offre_de_stage_id', 'id');
    }
    public function applications()
    {
        return $this->morphToMany('App\Models\School\Internship\Application', 'applyable');
        //return $this->hasMany('App\Models\School\Internship\Application', 'offre_de_stage_id', 'id');
    }
    public function year()
	{
		return $this->belongsTo(App\Year::class);
	}
/**
 * Assecors end Mutators
 */
public function setDocumentOffreAttribute($value){
    $this->attributes['document_offre']=Storage::putFile('public/uploads/internships/offers/submited_files', new File($value));
   }
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
}
