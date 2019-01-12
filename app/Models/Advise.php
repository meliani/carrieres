<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Advise
 * @package App\Models
 * @version Jan 12, 2019, 11:11 am UTC
 *
 * @property string 
 *       '',
 *       '',
 *       ''
 */
class Advise extends Model
{
    //use SoftDeletes;

    public $table = 'encadrements';
    

    protected $dates = [
        'updated_at',
        'created_at'
    ];


    public $fillable = [
        'id_internship',        
        'id_prof',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public function user()
	{
		return $this->HasOne('App\User');
    }
    public function prof()
	{
		return $this->HasOne('App\User');
    }
    public function internship()
	{
		return $this->HasOne('App\Internship');
	}

}
