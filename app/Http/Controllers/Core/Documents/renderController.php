<?php

namespace App\Http\Controllers\Core\Documents;

use App\Http\Controllers\Controller;
//use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use PDF;

class renderController extends Controller
{
    private $header;

    private $footer;

    private $file_name;

    public function __construct()
    {
        $this->middleware(['auth', 'Student']);
        $this->header = view::make('frontend.documents.pdf.header')->render();
        $this->footer = view::make('frontend.documents.pdf.footerINPT')->render();
        $this->file_name = str_slug(user()->student->full_name);
    }

    private $file_path;

    public function recommendation_letter()
    {
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.'.user()->student->level.'.pdfLettreRecommendation')
            ->setOption('margin-top', '25mm')
            ->setOption('margin-bottom', '29mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-right', '10mm')
            ->setOption('header-html', $this->header)
            ->setOption('footer-html', $this->footer)
            ->setOption('page-size', 'A4');
        $file_name = 'Lettre de recommendation '.$this->file_name.' '.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('app/public/user/generated/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);

        // return not allowed or not authorized view
        return abort(403, 'Unauthorized');
        // return $pdf->inline(Carbon::now()->format('d_m_Y').'_recommendation_letter.pdf');
    }

    public function conventionGlobale()
    {
        $pdf = app('snappy.pdf.wrapper');
        /** Some lines for testing purposes */
        //return PDF::loadFile('file:///C:/Users/Cosmos/Desktop/projects/newlife/documents/Convention Stage Ouvrier/ConventionStageOuvrier.html')->inline('github.pdf');
        //$pdf->loadView('frontend.documents.pdfConvention')
        $pdf->loadView('frontend.documents.pdf.templates.'.user()->student->level.'.contenuConvention')
            ->setOption('margin-top', '25mm')
            ->setOption('margin-bottom', '29mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-right', '10mm')
            ->setOption('header-html', $this->header)
            ->setOption('footer-html', $this->footer)
            ->setOption('page-size', 'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-General-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        // dd($pdf);

        $pdf->save($file_path);
        $this->attach($file_path);

        //return $pdf->inline($file_name);
    }

    public function conventionFrance()
    {
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.'.user()->student->level.'.contenuConventionFrance')
            ->setOption('margin-top', '25mm')
            ->setOption('margin-bottom', '29mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-right', '10mm')
            ->setOption('header-html', $this->header)
            ->setOption('footer-html', $this->footer)
            ->setOption('page-size', 'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-France-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }

    public function conventionMobilityAutre()
    {
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.'.user()->student->level.'.contenuConventionMobiliteAutre')
            ->setOption('margin-top', '25mm')
            ->setOption('margin-bottom', '29mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-right', '10mm')
            ->setOption('header-html', $this->header)
            ->setOption('footer-html', $this->footer)
            ->setOption('page-size', 'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-Mobility-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }

    public function conventionMobilityFrance()
    {
        $pdf = app('snappy.pdf.wrapper');

        $pdf->loadView('frontend.documents.pdf.templates.'.user()->student->level.'.contenuConventionMobilityFrance')
            ->setOption('margin-top', '25mm')
            ->setOption('margin-bottom', '29mm')
            ->setOption('margin-left', '10mm')
            ->setOption('margin-right', '10mm')
            ->setOption('header-html', $this->header)
            ->setOption('footer-html', $this->footer)
            ->setOption('page-size', 'A4');
        $file_name = 'Convention de stage '.$this->file_name.'-Mobility France-'.Carbon::now()->format('dMY his').'.pdf';
        $file_path = Storage_path('users/internship/'.$file_name);
        $pdf->save($file_path);
        $this->attach($file_path);
        //return $pdf->inline($file_name);
    }

    public function attach(string $file_path)
    {
        //user()->student->clearMediaCollection('internship');
        user()->student
            ->addMedia($file_path)
            ->toMediaCollection('internship');
        //$agreementsMediaCollection = 'Agreements'.School::actualYear;
    }
}
