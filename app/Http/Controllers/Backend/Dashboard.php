<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship\Project;

class Dashboard extends BaseController
{
    public function __invoke()
    {
        $count['internships']=Project::count();
        //$count['internships']=Student::count();
        return view('backend.dashboard',compact('count'));
    }
}
