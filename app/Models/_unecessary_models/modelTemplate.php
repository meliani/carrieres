<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modelTemplate extends Model
{
    use SoftDeletes;
    public $table = 'table';
    //protected $primaryKey = "id";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public $fillable = [  	
        'id',
        
    ];

    //protected $casts = [];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    /** ------ Relationships -------- */
    // Model Country and country_id is on users
    public function posts()
    {
    return $this->hasManyThrough(
        'App\Post',
        'App\Models\User',
        'country_id', // Foreign key on users table...
        'user_id', // Foreign key on posts table...
        'id', // Local key on countries table...
        'id' // Local key on users table...
    );
    }
}
