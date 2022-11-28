<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GeneratedAgreementController extends Controller
{
    private $documents;
    private $user;
    
    public function __construct()
    {
        // $this->middleware(['auth'])->except('create','store');        
        // $this->documents = User::get($user_id)->people->getMedia('internship');
    }
/*     public function __invoke($user_id)
    {
        dd($user_id);
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $this->user = User::find($user_id);
        if($this->user->people->hasMedia('internship')){
            $this->documents = $this->user->people->getMedia('internship');
            // return view('frontend.documents.partials.fillforms');
            // return view('frontend.documents.index',['documents'=>$this->documents]);
            return view('backend.internships.partials.generated_agreements', ['documents'=>$this->documents]);
        }
/*         //$offres = Offer::published()->valid()->year()->actual()->paginate();
        $offers = Offer::Where('year_id',config('school.current.year_id'))
        ->Where('is_valid',1)
        ->get();
 */
    }
}
