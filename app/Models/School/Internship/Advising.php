<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship;


class Advising extends Model
{
    //public $table = '';

    ///protected $primaryKey = "";

    protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    public $fillable = [  	
        'internship_id',
        'professor_id',
        'advising_type',
        'user_id'
    ];
    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}
