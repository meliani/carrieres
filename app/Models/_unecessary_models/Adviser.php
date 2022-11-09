<?php

namespace App\Models\School\Internship;

use App\Models\School\Internship;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Adviser extends Model
{
    use SoftDeletes;
    public $table = 'encadrements';

    protected $primaryKey = "id_internship";

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
    public $fillable = [  	
        'id_internship',
        'id_prof',
        'id_encad2',
        'id_exami1',
        'id_exami2',
        'id_exami3',
        'user_id'
    ];

    protected $casts = [

    ];
    public function user()
	{
		return $this->belongsTo(User::class);
    }
    public function adviser1()
	{
		return $this->belongsTo(User::class,'id_prof');
    }
    public function adviser2()
	{
		return $this->belongsTo(User::class,'id_encad2');
    }
    public function exami1()
	{
		return $this->belongsTo(User::class,'id_exami1');
    }
    public function exami2()
	{
		return $this->belongsTo(User::class,'id_exami2');
    }
    public function exami3()
	{
		return $this->belongsTo(User::class,'id_exami3');
    }
    public function internship()
	{
		return $this->belongsTo(Internship::class,'id_internship');
    }
}
