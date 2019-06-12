<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\School\Internship\Project;
use App\Models\Profile\Student;

class IframeController extends Controller
{
    public function __invoke()
    {
        
        $iframe = '<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRtTUc6KeZ1YZ74AKHeiazI-r-axUry4HvOLB2GOhB6Od9tlaS2FUaTujt2iPbC6_iFVwkry9kW-j7_/pubhtml?gid=386980207&single=true&widget=false&headers=false&range=A:E" width="99%" height="600px"></iframe>'; 
        return view('frontend.iframe',compact('iframe'));
    }
}
