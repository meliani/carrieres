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
    protected $extention;

    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
        $this->extention= Carbon::now()->format('d_M_Y-ha').'.xlsx';
    }
    public function AdvancedStagesExport($type)
    {
        return Excel::download(new AdvancedStagesExport, 'StagesPFEExportAdvanced - '.$this->extention);
    }
    public function InternshipsExport($type)
    {
        return Excel::download(new InternshipsExport, 'Internships global - '.$this->extention);
    }
    public function OffersApplicationsExport($type)
    {
        return Excel::download(new OffersApplicationsExport, 'OffersApplications - '.$this->extention);
    }
    public function AdvisingStatsExport($type)
    {
        return Excel::download(new AdvisingStatsExport, 'AdvisingStats - '.$this->extention);
    }
}
