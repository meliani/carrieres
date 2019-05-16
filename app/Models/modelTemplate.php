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
}
