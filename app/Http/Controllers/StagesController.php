<?php


namespace App\Http\Controllers;

use App\Exports\StagesExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use Maatwebsite\Excel\Concerns\FromView;

class StagesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function export() 
    {
        return Excel::download(new StagesExport, 'Declarations.xlsx');
    }
    public function downloadExcel($type)
    {
        return Excel::download(new StagesExport, 'Declarations.xlsx');

        /*
        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);*/
    }

}
