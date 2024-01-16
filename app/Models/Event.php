<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'current_year', 'name', 'slug', 'title', 'detail','date', 'hour', 'rsvp_mandatory', 'rsvp_deadline'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

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
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
        'date'=> 'datetime',    
    ];

    /**
     * Get the Program for the Event.
     */
    public function program()
    {
        return $this->belongsTo(\App\Models\School\Program::class);
    }


    /**
     * Get the Students for the Event.
     */
    public function students()
    {
        return $this->belongsToMany(\App\Models\Profile\Student::class,
        'event_student',
        'user_id','user_id');
    }

}
