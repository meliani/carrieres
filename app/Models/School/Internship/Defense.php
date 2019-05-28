<?php

namespace App\Models\Internship\School;

use Illuminate\Database\Eloquent\Model;

class Defense extends Model
{
    public $fillable = [ 	
    'id',
    'time_slot_id',
    'classroom_id',
    'internship_id',
        ];
}
