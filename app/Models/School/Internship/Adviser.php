<?php

Models\School\Internship\Internship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    use HasFactory;
    
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
