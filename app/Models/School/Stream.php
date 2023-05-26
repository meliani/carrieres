<?php

namespace App\Models\School;

use App\Models\Profile\Student;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'long_title', 'short_title', 'order'
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

    protected $casts = [
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
    ];

    /**
     * Get the Students for the Stream.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
