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
//use App\Models\School\Internship\internshipOffer as Offer;
use App\Offer;
use App\User;

class internOfferController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->except('create','store');        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$offres = Offer::published()->valid()->year()->actual()->paginate();
        $offers = Offer::Where('year_id',config('school.current.academic_year_id'))
        ->Where('is_valid',1)
        ->Where('status',1)
        ->get();

        return view('frontend.internships.offers.index', compact('offers'));

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
        $input=$request->all();
        $offer = new Offer($input);
        $offer->year()->associate(this_year());
        $offer->program()->associate(3);
        $offer->save();
        flash()->success('Offre de stage bien enregistrée.');

        return view('frontend.internships.offers.form.thanks');

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
