<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship\Project;
use App\Models\Profile\Student;

class Dashboard extends BaseController
{
    public function __invoke()
    {
        $count['internships']=Project::count();
        $count['internships.ine3']=Student::where('scholar_year','2018-2019')
        ->where('ine',3)
        ->doesntHave('internship')->count();
        $count['internships.mobility']=Student::where('scholar_year','2018-2019')
        ->where('ine',3)->where('option_text','Mobilité')
        ->doesntHave('internship')->count();
        $count['students']=Student::count();
        $count['students.actual']=Student::where('scholar_year','2018-2019')->count();
        $count['students.ine1']=Student::where('scholar_year','2018-2019')->where('ine',1)->count();
        $count['students.ine2']=Student::where('scholar_year','2018-2019')->where('ine',2)->count();
        $count['students.ine3']=Student::where('scholar_year','2018-2019')->where('ine',3)->count();
        
        return view('backend.dashboard',compact('count'));
    }
}
