<?php

namespace App\Http\Controllers\Core\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use PDF;
use Carbon\Carbon;
class renderController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth','Etudiant']);
    }
    private $file_path;
    public function convention(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('edocs.pdf.header')->render();
        $footer = view()->make('edocs.pdf.footerINPT')->render();
        //return PDF::loadFile('file:///C:/Users/Cosmos/Desktop/projects/newlife/documents/Convention Stage Ouvrier/ConventionStageOuvrier.html')->inline('github.pdf');
        //$pdf->loadView('edocs.pdfConvention')
        $pdf->loadView('edocs.pdf.templates.ine'.auth()->user()->people->ine.'.contenuConvention')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->fname.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function recommendation_letter(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('edocs.pdf.header')->render();
        $footer = view()->make('edocs.pdf.footerINPT')->render();
        //return PDF::loadFile('file:///C:/Users/Cosmos/Desktop/projects/newlife/documents/Convention Stage Ouvrier/ConventionStageOuvrier.html')->inline('github.pdf');
        //$pdf->loadView('edocs.pdfConvention')
        $pdf->loadView('edocs.pdf.templates.ine'.auth()->user()->people->ine.'.pdfLettreRecommendation')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Lettre de recommendation '.auth()->user()->people->fname.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('app/public/user/generated/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline(Carbon::now()->format('d_m_Y').'_Convention_de_stage.pdf');
    }

    public function attach(String $file_path){
        //auth()->user()->people->clearMediaCollection('internship');
        auth()->user()->people
        ->addMedia($file_path)
        ->toMediaCollection('internship');
    }
}
