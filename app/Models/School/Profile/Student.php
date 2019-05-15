<?php

namespace App\Models\School\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Profile\People;

class Student extends People
{

    public function internship()
    {
        return $this->hasOne(Internship::class,'user_id','user_id');
    }
}
