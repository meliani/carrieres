<?php

namespace App\Models\School\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'team_uuid'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
