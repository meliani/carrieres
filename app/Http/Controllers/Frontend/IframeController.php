<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\School\Internship\Project;
use App\Models\Profile\Student;

class IframeController extends Controller
{
    
    public function PlanningPFE()
    {
        $title = "Planning des soutenances 2021";
        
        $iframe = '<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRtTUc6KeZ1YZ74AKHeiazI-r-axUry4HvOLB2GOhB6Od9tlaS2FUaTujt2iPbC6_iFVwkry9kW-j7_/pubhtml?gid=589152417&single=true&widget=false&headers=false&range=A:E" width="99%" height="1200px"></iframe>'; 
        return view('frontend.iframe',compact('iframe','title'));
    } 
    public function PlanningJeudis()
    {
        $title = "Planning des Jeudis Entreprises 2021";
        $iframe = '<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQgb9d3SO1PtC5e0ugkRlQczysMYF9YDevM6vVZtM9_eNzmv9Wgs9EngvZP2scjhMjCAK7MzJcqRrvp/pubhtml?gid=741529741&single=true&widget=false&headers=false&range=A:D" width="99%" height="1200px"></iframe>'; 
        return view('frontend.iframe',compact('iframe','title'));
    } 
}
