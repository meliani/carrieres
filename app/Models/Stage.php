<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{

    public $table = 'internshipsview';
    

    protected $dates = ['created_at'];
    
    public $fillable = [
        'id',
        'name',
        'option_text',
        'raison_sociale',
        'intitule',
        'nbr_advisors'
    ];

    protected $casts = [

    ];
}
