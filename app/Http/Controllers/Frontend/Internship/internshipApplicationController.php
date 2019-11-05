<?php
namespace App\Http\Controllers\Frontend\Internship;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
/** --------- Models ----------- */
use App\Models\School\Internship\Application;
use App\User;
//use App\Models\School\Internship\internshipOffer as Offer;
use App\Offer;

class internshipApplicationController extends Controller
{

    protected $offer;
    public function __construct()
    {   
        if (!empty(request('offer'))) {
            flash()->error('Offre de stages inexistante');
            return redirect(route('offers.index'));
        }
        //$this->offer=Offer::valid()->find(request('offer'));
        $this->offer = Offer::find(request('offer'));
        $this->middleware(['auth']);  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::where('user_id',user()->id)->get();
        //dd($applications);
        return view('frontend.internships.offers.applications.index',compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //$id = Route::current()->parameter('id');
        $offer = Offer::find(request('offer'));
        return view('frontend.internships.offers.applications.create',compact('offer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $upload= upload($request,[
                'var_name'=>'file_cv',
            'upload_path'=>'uploads/students/CVs'
            ]);
            $upload= upload($request,['var_name'=>'file_cover_letter',
            'upload_path'=>'uploads/students/LMs'
            ]);

        $offer = Offer::find($request->offer);
        
        $application = new Application([ 
            'file_cv' => $request->file_cv,
            'file_cover_letter' => $request->file_cover_letter,
        ]);
        
        $application->user()->associate(auth()->user()->id);
        $application->offer()->associate($request->offer);
        $application->save();
        //$offer->applications()->attach($application->id);//, ['cv' => $cv,'lettre_de_motivation' => $lettre_de_motivation ]);
        
        Session::flash('message', 'Candidature bien enregistrée!'); 
        Session::flash('alert-class', 'success');
        return redirect(route('offers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Internship\internshipApplication  $internshipApplication
     * @return \Illuminate\Http\Response
     */
    public function show(internshipApplication $internshipApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Internship\internshipApplication  $internshipApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(internshipApplication $internshipApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Internship\internshipApplication  $internshipApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, internshipApplication $internshipApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Internship\internshipApplication  $internshipApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(internshipApplication $internshipApplication)
    {
        //
    }
}
