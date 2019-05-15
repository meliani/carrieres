<?php


namespace App\Http\Controllers\extractions;

use App\Http\Controllers\Controller;
use App\Exports\AdvancedStagesExport;
use App\Exports\OffersApplicationsExport;
use App\Exports\AdvisingStatsExport;
use App\Exports\InternshipsExport;

use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use Maatwebsite\Excel\Concerns\FromView;

class AdminExportsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Auth','isAdmin']);        
    }


    public function AdvancedStagesExport($type)
    {
        return Excel::download(new AdvancedStagesExport, 'StagesPFEExportAdvanced.xlsx');
    }
    public function InternshipsExport($type)
    {
        return Excel::download(new InternshipsExport, 'Internships global'.Carbon::now()->format('dMY his').'.xlsx');
    }
    public function OffersApplicationsExport($type)
    {
        return Excel::download(new OffersApplicationsExport, 'OffersApplications.xlsx');
    }
    public function AdvisingStatsExport($type)
    {
        return Excel::download(new AdvisingStatsExport, 'AdvisingStats.xlsx');
    }
}
