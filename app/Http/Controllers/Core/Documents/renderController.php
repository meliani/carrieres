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
        $this->middleware(['auth','Student']);
    }
    private $file_path;
    public function convention(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('frontend.documents.pdf.header')->render();
        $footer = view()->make('frontend.documents.pdf.footerINPT')->render();
        /** Some lines for testing purposes */
        //return PDF::loadFile('file:///C:/Users/Cosmos/Desktop/projects/newlife/documents/Convention Stage Ouvrier/ConventionStageOuvrier.html')->inline('github.pdf');
        //$pdf->loadView('frontend.documents.pdfConvention')
        $pdf->loadView('frontend.documents.pdf.templates.'.auth()->user()->student->programs->last()->slug.'.contenuConvention')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->first_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function recommendation_letter(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('frontend.documents.pdf.header')->render();
        $footer = view()->make('frontend.documents.pdf.footerINPT')->render();
        $pdf->loadView('frontend.documents.pdf.templates.'.auth()->user()->student->programs->last()->slug.'.pdfLettreRecommendation')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Lettre de recommendation '.auth()->user()->people->first_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('app/public/user/generated/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        return $pdf->inline(Carbon::now()->format('d_m_Y').'_recommendation_letter.pdf');
    }
    public function conventionPfe(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('frontend.documents.pdf.header')->render();
        $footer = view()->make('frontend.documents.pdf.footerINPT')->render();
        $pdf->loadView('frontend.documents.pdf.templates.'.auth()->user()->student->programs->last()->slug.'.contenuConvention')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->first_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionPfeFrance(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('frontend.documents.pdf.header')->render();
        $footer = view()->make('frontend.documents.pdf.footerINPT')->render();
        $pdf->loadView('frontend.documents.pdf.templates.'.auth()->user()->student->programs->last()->slug.'.contenuConventionFrance')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->first_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionmobilityPfe(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('frontend.documents.pdf.header')->render();
        $footer = view()->make('frontend.documents.pdf.footerINPT')->render();
        $pdf->loadView('frontend.documents.pdf.templates.'.auth()->user()->student->programs->last()->slug.'.contenuConvention')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->first_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionMobilityPfeAutre(){
        $pdf = app('snappy.pdf.wrapper');
        $header = view()->make('frontend.documents.pdf.header')->render();
        $footer = view()->make('frontend.documents.pdf.footerINPT')->render();
        $pdf->loadView('frontend.documents.pdf.templates.'.auth()->user()->student->programs->last()->slug.'.contenuConventionMobiliteAutre')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html', $header)
        ->setOption('footer-html', $footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->first_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    
    public function attach(String $file_path){
        //auth()->user()->people->clearMediaCollection('internship');
        auth()->user()->people
        ->addMedia($file_path)
        ->toMediaCollection('internship');
    }
}
