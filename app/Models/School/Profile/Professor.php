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
        return strtoupper($this->attributes['first_name']).' '.$this->attributes['last_name'];
    }

    // ******************** LOVE LETTERS (SCOPES) ************************ //

    public function scopeActive($query) {
        return $query->where('is_active', true);
    }

    // ******************** LOVE RELATIONSHIPS ************************ //
    public function user()
	{
		return $this->BelongsTo(User::class,'id','id');
    }
    public function people()
	{
		return $this->BelongsTo(People::class,'user_id','id');
    }   
}
