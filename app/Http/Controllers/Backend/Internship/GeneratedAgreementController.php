<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Controller;
use App\Models\Profile\Person;
use App\Models\Profile\Student;
use App\Models\User;
use Illuminate\Http\Request;

class GeneratedAgreementController extends Controller
{
    private $documents;
    private $student;
    
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
    public function index($id)
    {
        $this->student = Student::find($id);
        if($this->student->hasMedia('internship')){
            $this->documents = $this->student->getMedia('internship');
            return view('backend.internships.partials.generated_agreements', ['documents'=>$this->documents]);
        }
    }
}
