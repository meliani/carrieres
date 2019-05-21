<?php

namespace App\Models\School\Profile;
use App\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\School\Profile\People;

class Professor extends Model
{
    protected $appends = [
        'name',
    ];
    public function getNameAttribute($value)
    {
        return strtoupper($this->attributes['last_name']).' '.strtoupper($this->attributes['first_name']);
    }

    // ******************** LOVE LETTERS (SCOPES) ************************ //

    public function scopeActive($query) {
        return $query->where('is_active', true);
    }

    // ******************** LOVE RELATIONSHIPS ************************ //
    public function user()
	{
		return $this->belongsTo(User::class,'id','id');
    }
    public function people()
	{
		return $this->belongsTo(People::class,'user_id','id');
    }   
}
