<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Core\baseModel;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class Offer extends Model
{
    protected $table="internship_offers";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'year_id',
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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    public function setDocumentOffreAttribute($value){
        $this->attributes['document_offre']=Storage::putFile('storage/uploads/internships/offers/submited_files', new File($value));
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
               return $value;
           else
               return NULL;
       }
    /**
     * Get the Year for the Offer.
     */
    public function program()
    {
        return $this->belongsTo(\App\Stream::class);
    }
    public function year()
    {
        return $this->belongsTo(\App\Year::class);
    }
    public function applications()
    {
        return $this->hasMany('App\Models\School\Internship\Application', 'offre_de_stage_id', 'id');
    }

    public function getExpireAtAttribute()
    {
        //Carbon::now();
        $date=$this->attributes['expire_at'];
        if(isset($date))
        {
        $expired_at=\Carbon\Carbon::parse($date);
        $elapse=$expired_at->diffInDays();
        if(\Carbon\Carbon::now()<$expired_at)
            //if expiring diffInHours ->diffForHumans()
            return "Expire ".$expired_at->diffForHumans();
        elseif(\Carbon\Carbon::now()>$expired_at)
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
