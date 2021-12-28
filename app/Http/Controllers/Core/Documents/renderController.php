<?php

namespace App\Http\Controllers\Core\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use PDF;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
class renderController extends Controller
{
    private $header;
    private $footer;
    
    public function __construct()
    {
        $this->middleware(['auth','Student']);
        $this->header = view::make('frontend.documents.pdf.header')->render();
        $this->footer = view::make('frontend.documents.pdf.footerINPT')->render();
    }
    private $file_path;

    public function recommendation_letter(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.ine'.auth()->user()->people->ine.'.pdfLettreRecommendation')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Lettre de recommendation '.auth()->user()->people->full_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('app/public/user/generated/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        return $pdf->inline(Carbon::now()->format('d_m_Y').'_recommendation_letter.pdf');
    }

    public function conventionGlobale(){
        $pdf = app('snappy.pdf.wrapper');
        /** Some lines for testing purposes */
        //return PDF::loadFile('file:///C:/Users/Cosmos/Desktop/projects/newlife/documents/Convention Stage Ouvrier/ConventionStageOuvrier.html')->inline('github.pdf');
        //$pdf->loadView('frontend.documents.pdfConvention')
        $pdf->loadView('frontend.documents.pdf.templates.ine'.auth()->user()->people->ine.'.contenuConvention')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->full_name.'- General -'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);

        //return $pdf->inline($file_name);
    }

    public function conventionFrance(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.ine'.auth()->user()->people->ine.'.contenuConventionFrance')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->full_name.'- France - '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionMobilityAutre(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.ine'.auth()->user()->people->ine.'.contenuConventionMobiliteAutre')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->full_name.'- Mobility - '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionMobilityFrance(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.ine'.auth()->user()->people->ine.'.contenuConventionMobilityFrance')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.auth()->user()->people->full_name.'- Mobility France -'.Carbon::now()->format('dMY his').'.pdf';
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
<<<<<<< HEAD
        //$agreementsMediaCollection = 'Agreements'.School::actualYear;
=======
        $agreementsMediaCollection = 'Agreements'.School::actualYear;
>>>>>>> f8caeb2a2aec462f453c3ae603718455fb10663b

    }
}
