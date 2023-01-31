<?php

namespace Models\School\Project;

use App\Models\Core\baseModel as Model;

class Supervisor extends Model
{
    
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
