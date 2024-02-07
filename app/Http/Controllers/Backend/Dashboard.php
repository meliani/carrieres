<?php

namespace App\Http\Controllers\Backend;

use App\Models\Profile\Student;
use App\Models\School\Internship\Internship;
use App\Models\School\Internship\Project;

class Dashboard extends BaseController
{
    public function __invoke()
    {
        // $count['internships']=Project::count();
        // $count['internships'] = Internship::count();
        // $count['internships.ine3'] = Student::where('level', '=', 'ThirdYear')
        //     ->doesntHave('internship')->count();
        // $count['internships.mobility'] = Student::where('level', '=', 'ThirdYear')->where('is_mobility', 1)
        //     ->doesntHave('internship')->count();
        // $count['students'] = Student::count();
        // $count['students.actual'] = Student::count();
        // $count['students.ine1'] = Student::where('level', '=', 'FirstYear')->count();
        // $count['students.ine2'] = Student::where('level', '=', 'SecondYear')->count();
        // $count['students.ine3'] = Student::where('level', '=', 'ThirdYear')->count();
        // $count['internships'] = Internship::count();

        return view('backend.dashboard');
        // , compact('count'));
    }
}
