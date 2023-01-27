<?php

namespace App\Models\School\Project;

use App\Models\Core\baseModel as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{

    protected $fillable = [
        'id',
        'student_id',
        'team_uuid'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
