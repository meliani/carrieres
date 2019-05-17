<?php
namespace App\Http\Controllers\Frontend\Internship;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Session;

use App\Http\Controllers\Core\Documents\UploaderController as Uploader;


use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
/** --------- Models ----------- */
use App\Models\School\Internship\Application;
use App\User;
use App\Models\School\Internship\internshipOffer as Offer;

class internshipApplicationController extends Controller
{

    protected $offer;
    public function __construct(Request $r)
    {        
        if (!isset($r['offer'])) {
            Flash::error('Offre de stages inexistante');
            return redirect(route('offer.index'));
        }
        $this->offer=Offer::valid()->find($r->offer);

        $this->middleware(['auth','isAdmin']);  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //$id = Route::current()->parameter('id');
        return view('frontend.internships.internship_offers.application.create')
        ->with('offre', $this->offer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $upload= new Uploader($request,'cv','uploads/students/CVs');
            $upload= new Uploader($request,'lettre_de_motivation','uploads/students/LMs');

        $offer = Offer::find($request->offer);
        
        $application = new Application([ 
            'cv' => $request->cv,
            'lettre_de_motivation' => $request->lettre_de_motivation,
        ]);
        
        $application->user()->associate(auth()->user()->id);
        $application->offer()->associate($request->offer);
        $application->save();
        $offer->applications()->attach($application->id);//, ['cv' => $cv,'lettre_de_motivation' => $lettre_de_motivation ]);
        
        Session::flash('message', 'Candidature bien enregistrée!'); 
        Session::flash('alert-class', 'success');
        return redirect(route('offer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Internship\InternshipApplication  $InternshipApplication
     * @return \Illuminate\Http\Response
     */
    public function show(InternshipApplication $InternshipApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Internship\InternshipApplication  $InternshipApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(InternshipApplication $InternshipApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Internship\InternshipApplication  $InternshipApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternshipApplication $InternshipApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Internship\InternshipApplication  $InternshipApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternshipApplication $InternshipApplication)
    {
        //
    }
}
