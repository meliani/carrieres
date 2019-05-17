<?php
namespace App\Http\Controllers\Frontend\Internship;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Session;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
/** --------- Models ----------- */
use App\Models\School\Internship\Application;
use App\Models\School\Internship\internshipOffer as Offer;
use App\User;

class InternshipOfferController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offer::published()->valid()->paginate();
        return view('frontend.internships.internship_offers.index', compact('offres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $Offer)
    {
        return view('frontend.internships.internship_offers.show')
        ->with('offre', $Offer);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $Offer)
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
    public function update(Request $request, Offer $Offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $Offer)
    {
        //
    }
}
