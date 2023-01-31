<?php

namespace App\Http\Controllers\Core\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Str;
use App;
use PDF;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
class renderController extends Controller
{
    private $header;
    private $footer;
    private $file_name;

    public function __construct()
    {
        $this->middleware(['auth','Student']);
        $this->header = view::make('frontend.documents.pdf.header')->render();
        $this->footer = view::make('frontend.documents.pdf.footerINPT')->render();
        $this->file_name = str_slug(auth()->user()->student->full_name);
    }
    private $file_path;

    public function recommendation_letter(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.program_id_'.auth()->user()->student->program_id.'.pdfLettreRecommendation')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Lettre de recommendation '.$this->file_name.' '.Carbon::now()->format('dMY his').'.pdf';
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
        $pdf->loadView('frontend.documents.pdf.templates.program_id_'.auth()->user()->student->program_id.'.contenuConvention')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-General-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        // dd($pdf);

        $pdf->save($file_path);
        $this->attach($file_path);

        //return $pdf->inline($file_name);
    }

    public function conventionFrance(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.program_id_'.auth()->user()->student->program_id.'.contenuConventionFrance')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-France-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionMobilityAutre(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.program_id_'.auth()->user()->student->program_id.'.contenuConventionMobiliteAutre')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-Mobility-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function conventionMobilityFrance(){
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.program_id_'.auth()->user()->student->program_id.'.contenuConventionMobilityFrance')
        ->setOption('margin-top', '25mm')
        ->setOption('margin-bottom', '29mm')
        ->setOption('margin-left', '10mm')
        ->setOption('margin-right', '10mm')
        ->setOption('header-html',$this->header)
        ->setOption('footer-html',$this->footer)
        ->setOption('page-size' ,'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-Mobility France-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }
    public function attach(String $file_path){
        //auth()->user()->student->clearMediaCollection('internship');
        auth()->user()->student
        ->addMedia($file_path)
        ->toMediaCollection('internship');
        //$agreementsMediaCollection = 'Agreements'.School::actualYear;
    }
}
