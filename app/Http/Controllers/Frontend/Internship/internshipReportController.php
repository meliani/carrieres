<?php
namespace App\Http\Controllers\Frontend\Internship;

use App\Models\School\Internship\internshipReport as Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInternshipReport;

use Session;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
/** --------- Models ----------- */
use App\Models\School\Internship\Application;
use App\User;

class internshipReportController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.internships.reports.create');
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
        $report = new Report($request->validated());
        $report->user()
        ->associate(auth()->user())
        ->save();

        flash()->success('Rapport de stage enregistré.');

        return view('frontend.internships.reports.thanks')->with('message', 'Votre Rapport a été bien enregistrée');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
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
        //
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
