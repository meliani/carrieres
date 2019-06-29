<?php
namespace App\Http\Controllers\Frontend\Internship;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
/** --------- Models ----------- */
use App\Models\School\Internship\Application;
use App\Models\School\Internship\internshipOffer as Offer;
use App\User;

class internshipOfferController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','isAdmin'])->except('create','store');        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offer::published()->valid()->paginate();
        return view('frontend.internships.offers.index', compact('offres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($internship_type=2)
    {
        return view('frontend.internships.offers.submit', compact('internship_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Offer::create($request->all()); 
        flash()->success('Offre de stage bien enregistrée.');

        return view('frontend.internships.offers.form.thanks')->with('message', 'Votre proposition a été bien enregistrée');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Internship\Offer  $Offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $Offer)
    {
        return view('frontend.internships.offers.show')
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
