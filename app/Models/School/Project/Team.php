<?php

namespace App\Models\School\Project;

use App\Models\Core\baseModel as Model;
use App\Models\School\Project\Project;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;


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
    public function project()
    {
        // return $this->hasOne(Project::class,'id');
        // return $intern->student->team->project;
        return $this->hasOne(Project::class,'team_uuid','team_uuid');

    }
    public function supervisors()
    {
        // return $this->hasOne(Project::class,'id');
        // return $intern->student->team->project;
        return $this->hasMany(Supervisor::class,'team_uuid','team_uuid');
// or HasManyThroughpivot
    }
}
