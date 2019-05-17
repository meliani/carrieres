<?php

namespace App\Models\School\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Profile\People;
use App\Models\School\Internship\Internship;

class Student extends People
{

    public function internship()
    {
        return $this->hasMany(Internship::class,'user_id','user_id');
    }
    public function agreement()
    {
        return $this->hasOne(InternshipAgreement::class,'user_id','user_id');
    }
}
