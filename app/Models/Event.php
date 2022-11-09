<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'program_id', 'name', 'slug', 'title', 'detail','date', 'hour', 'rsvp_mandatory', 'rsvp_deadline'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

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
     * Get the Program for the Event.
     */
    public function program()
    {
        return $this->belongsTo(\app\Models\Program::class);
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
