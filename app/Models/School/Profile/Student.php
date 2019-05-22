<?php

namespace App\Models\School\Profile;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Profile\People;
use App\Models\School\Internship;

class Student extends People
{
    protected $table = 'people';

    public static function boot()
    {
        parent::boot();

        /**static::addGlobalScope(function ($query) {
            $query->where('status', '1');
        });*/
        static::addGlobalScope(function ($query) {
                $query->where('is_active', true);
        });
    }

    public function internship()
    {
        return $this->hasOne(Internship::class,'user_id','user_id')
        ->with('adviser.adviser1.adviser2');
    }
    public function agreement()
    {
        return $this->hasOne(InternshipAgreement::class,'user_id','user_id');
    }

}
