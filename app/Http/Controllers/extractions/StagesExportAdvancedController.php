<?php


namespace App\Http\Controllers\extractions;

use App\Http\Controllers\Controller;
use App\Exports\StagesExportAdvanced;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use Maatwebsite\Excel\Concerns\FromView;

class StagesExportAdvancedController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function export() 
    {
        return Excel::download(new StagesExportAdvanced, 'StagesPFEExportAdvanced.xlsx');
    }
    public function downloadExcel($type)
    {
        return Excel::download(new StagesExportAdvanced, 'StagesPFEExportAdvanced.xlsx');

        /*
        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);*/
    }

}
