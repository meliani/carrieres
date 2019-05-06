<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
