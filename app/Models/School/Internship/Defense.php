<?php

namespace App\Models\School\Internship;
use App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;

class Defense extends Model
{
    public $fillable = [ 	
    'id',
    'time_slot_id',
    'classroom_id',
    'internship_id',
    'defense_at',
        ];

        public function internship()
        {
            return $this->belongsTo(Internship::class);
        } 

}
