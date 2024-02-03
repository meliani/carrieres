<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship\Project;
use App\Models\School\Internship\Internship;
use App\Models\Profile\Student;

class Dashboard extends BaseController
{
    public function __invoke()
    {
        // $count['internships']=Project::count();
        $count['internships']=Internship::count();
        $count['internships.ine3']=Student::where('current_year',3)
        ->doesntHave('internship')->count();
        $count['internships.mobility']=Student::where('current_year',3)->where('is_mobility',1)
        ->doesntHave('internship')->count();
        $count['students']=Student::count();
        $count['students.actual']=Student::count();
        $count['students.ine1']=Student::where('current_year',1)->count();
        $count['students.ine2']=Student::where('current_year',2)->count();
        $count['students.ine3']=Student::where('current_year',3)->count();
        
        return view('backend.dashboard',compact('count'));
    }
}
