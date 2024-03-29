<?php


namespace App\Http\Controllers\extractions;

use App\Http\Controllers\Controller;
use App\Exports\AdvancedStagesExport;
use App\Exports\OffersApplicationsExport;
use App\Exports\AdvisingStatsExport;
use App\Exports\InternshipsExport;
use App\Exports\planningByProfessor;

use Carbon\Carbon;

use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use App\Exports\DefensesExport;

class AdminExportsController extends Controller
{
    protected $extention;

    public function __construct()
    {
        $this->middleware(['auth','Admin']);
        $this->extention= Carbon::now()->format('d_M_Y-ha').'.xlsx';
    }
    // public function AdvancedStagesExport($type)
    // {
    //     return Excel::download(new AdvancedStagesExport, 'StagesPFEExportAdvanced - '.$this->extention);
    // }
    public function InternshipsExport($type)
    {
        return Excel::download(new InternshipsExport, 'Internships global - '.$this->extention);
    }
    public function DefensesExport($type)
    {

        return Excel::download(new DefensesExport, 'Internships global - '.$this->extention);
    }
    public function OffersApplicationsExport($type)
    {
        return Excel::download(new OffersApplicationsExport, 'OffersApplications - '.$this->extention);
    }
    // public function AdvisingStatsExport($type)
    // {
    //     return Excel::download(new AdvisingStatsExport, 'AdvisingStats - '.$this->extention);
    // }
    // public function planningByProfessor($type)
    // {
    //     return Excel::download(new planningByProfessor, 'Planning des enseignants - '.$this->extention);
    // }
}
