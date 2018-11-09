<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    public $table = 'people';
    

    protected $dates = ['created_at',
                        'updated_at'
    ];
    
    public $fillable = [
        'id',
        'user_id',
        'title',
        'fname',
        'lname',
        'email',
        'phone',
        'cv',
        'photo',
        'option_id'
    ];

    protected $casts = [

    ];

    public function users()
	{
		return $this->belongsTo('App\Models\Application');
	}

    /* public function options()
    {
        return $this->belongsTo('App\Models\Options');
    }
    */
}
