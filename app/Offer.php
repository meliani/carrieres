<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table="internship_offers";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'year_id'
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
