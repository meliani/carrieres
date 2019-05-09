<?php

namespace App\Models\School\Internship;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Internship\internshipType;


class internshipDocument extends Model
{
    //
    //public $table = "internship_documents";

    public function internshipType()
    {
        $this->belongsTo(internshipType::class);
    }
}
