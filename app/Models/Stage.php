<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{

    public $table = 'viewpfe';
    

    protected $dates = ['created_at'];
    
    public $fillable = [
        'id',
        'name',
        'option_text',
        'raison_sociale',
        'intitule'
		];

    protected $casts = [

    ];
}
