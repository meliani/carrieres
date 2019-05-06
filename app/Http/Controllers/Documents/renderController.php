<?php

namespace App\Http\Controllers\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use PDF;
use Carbon\Carbon;
class renderController extends Controller
{

    public function toPdf(){
        $pdf = App::make('snappy.pdf.wrapper');
        $header = view()->make('edocs.pdf.header')->render();
        $footer = view()->make('edocs.pdf.footerINPT')->render();
        //return PDF::loadFile('file:///C:/Users/Cosmos/Desktop/projects/newlife/documents/Convention Stage Ouvrier/ConventionStageOuvrier.html')->inline('github.pdf');
        //$pdf->loadView('edocs.pdfConvention')
        $pdf->loadView('edocs.pdf.wrapper')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        return $pdf->inline(Carbon::now()->format('d_m_Y').'_Convention_de_stage.pdf');
    }
}
