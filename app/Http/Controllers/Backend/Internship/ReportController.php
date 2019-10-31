<?php
namespace App\Http\Controllers\Backend\Internship;

use App\Models\School\Internship\internshipReport as Report;

use Illuminate\Http\Request;

use App\Http\Controllers\Backend\BaseController;
/** --------- Models ----------- */
use App\Models\Profile\Student;

class ReportController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $students = Student::whereHas('report')->get();

        return view('backend.internships.reports.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.internships.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternshipReport $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('backend.internships.reports.partials.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $student = Student::find($report->user_id);
        //$documents = $student->getMedia('internship');
        // check how to get multiple medias from model
        $documents[0] = $student->getMedia('file_agreement');
        $documents[1] = $student->getMedia('file_report');
        $documents[2] = $student->getMedia('file_certificate');
        
        //$documents = $student->getMedia();
        //$documents = $report->student->media();
        //dd($documents);
        return view('backend.internships.reports.edit', compact('report','documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $report->fill($request->all());
        $report->save();
        return redirect()->action('Backend\Internship\ReportController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
