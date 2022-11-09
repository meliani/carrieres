<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'slug', 'parent_id'
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
     * Get the Students for the Stream.
     */
    public function students()
    {
        return $this->belongsToMany(\App\Student::class);
    }

    /**
     * Get the Programs for the Stream.
     */
    public function programs()
    {
        return $this->belongsToMany(\app\Models\Program::class);
    }

}
