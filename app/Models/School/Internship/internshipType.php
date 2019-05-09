<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship\Document;

class internshipType extends Model
{
    //
    public $table = "school_internship_types";
    public function documents(){
        $this->hasMany(Document::class);
    }
}
