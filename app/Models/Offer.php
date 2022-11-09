<?php

namespace App\Models;

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
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'expire_at'
    ];


    public $fillable = [
        'id',
        'year_id',
        'program_id',
        'organization_name',
        'internship_type',
        'responsible_fullname',
        'responsible_occupation',
        'responsible_phone',
        'responsible_email',        
        'project_title',
        'project_detail',
        'internship_location',
        'keywords',
        'attached_file',
        'link',
        'paycheck',
        'recruting_type',
        'event_id',
        'event_date',
        'badge',
        'display_permissions',
        'status',
        'is_valid',
        'applyable'        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'year_id' => 'string',
        'program_id' => 'string',
        'organization_name' => 'string',
        'internship_type' => 'string',
        'responsible_fullname' => 'string',
        'responsible_occupation' => 'string',
        'responsible_phone' => 'string',
        'responsible_email' => 'string',        
        'project_title' => 'string',
        'project_detail' => 'string',
        'internship_location' => 'string',
        'keywords' => 'string',
        'attached_file' => 'string',
        'link' => 'string',
        'paycheck' => 'string',
        'recruting_type' => 'string',
        'event_id' => 'string',
        'event_date' => 'string',
        'badge' => 'string',
        'display_permissions' => 'string',
        'status' => 'integer',
        'is_valid' => 'boolean',
        'applyable' => 'boolean',
        'expire_at' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'nullable',
        'year_id' => 'nullable',
        'program_id' => 'nullable',
        'organization_name' => 'nullable',
        'internship_type' => 'nullable',
        'responsible_fullname' => 'nullable',
        'responsible_occupation' => 'nullable',
        'responsible_phone' => 'nullable',
        'responsible_email' => 'nullable',        
        'project_title' => 'nullable',
        'project_detail' => 'nullable',
        'internship_location' => 'nullable',
        'keywords' => 'nullable',
        'attached_file' => 'nullable',
        'link' => 'nullable',
        'paycheck' => 'nullable',
        'recruting_type' => 'nullable',
        'event_id' => 'nullable',
        'event_date' => 'nullable',
        'badge' => 'nullable',
        'display_permissions' => 'nullable',
        'status' => 'nullable',
        'is_valid' => 'nullable',
        'applyable' => 'nullable',
        'expire_at' => 'nullable'        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];


    public function setAttachedFileAttribute($value){
        //dd($value);
        $this->attributes['attached_file']=Storage::disk('interOffersDocs')->putFile('', new File($value));
       }
       public function getResponsibleNameAttribute($value)
       {
           return ucfirst($value);
       }
   
       public function getProjectDetailAttribute($value)
       {
           return nl2br($value);
       }
       
       public function getInternshipLocationAttribute($value)
       {
           return nl2br($value);
       }
       public function getAttachedFileAttribute($value)
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
        return $this->belongsTo(\App\Models\stream::class);
    }
    public function year()
    {
        return $this->belongsTo(\App\Models\Year::class);
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
