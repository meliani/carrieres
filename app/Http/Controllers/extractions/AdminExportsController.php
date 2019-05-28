<?php


namespace App\Http\Controllers\extractions;

use App\Http\Controllers\Controller;
use App\Exports\AdvancedStagesExport;
use App\Exports\OffersApplicationsExport;
use App\Exports\AdvisingStatsExport;
use App\Exports\InternshipsExport;

use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class AdminExportsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);        
    }


    public function AdvancedStagesExport($type)
    {
        return Excel::download(new AdvancedStagesExport, 'StagesPFEExportAdvanced - '.Carbon::now()->format('d_M_Y-ha').'.xlsx');
    }
    public function InternshipsExport($type)
    {
        return Excel::download(new InternshipsExport, 'Internships global - '.Carbon::now()->format('d_M_Y-ha').'.xlsx');
    }
    public function OffersApplicationsExport($type)
    {
        return Excel::download(new OffersApplicationsExport, 'OffersApplications - '.Carbon::now()->format('d_M_Y-ha').'.xlsx');
    }
    public function AdvisingStatsExport($type)
    {
        return Excel::download(new AdvisingStatsExport, 'AdvisingStats - '.Carbon::now()->format('d_M_Y-ha').'.xlsx');
    }
}
