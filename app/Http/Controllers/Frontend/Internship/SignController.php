<?php

namespace App\Http\Controllers\Frontend\Internship;

// Models
use App\Models\School\Internship\Internship;
use App\Models\School\Internship\Adviser;
use App\Models\Profile\Student;
use App\Models\Stage;
use App\Models\User;
use App\Models\Profile\Professor;

use App\Http\Controllers\Controller;
use App\Exports\StagesExport;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class SignController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Teacher']);        
    }

    public function index(Request $request)
    {
        
        $students = Student::has('internship')
        ->with('internship')
        ->where('is_active',true)
        
        ->latest();
        
        $students = $students->with(['internship' => function ($q) {
            $q->latest();
        }])->paginate();
        
        if(!isset($request->s)){
            $students = Student::has('internship')->where('is_active',true)
            ->with('internship')
            // ->where('option_id',user()->filiere_id)
            ->with(['internship' => function ($q) {
                $q->orderBy('updated_at', 'desc');
            }])
            ->paginate();
        }else{
            $s=$request->s;
            $students = Student::with('internship')->has('internship')
            ->where('is_active',true)
            // ->with('internship')
            // ->where('option_id',user()->filiere_id)
            ->where('first_name', 'like', '%'.$s.'%')
            ->orWhere('last_name', 'like', '%'.$s.'%')
            ->orWhere('pfe_id', 'like', '%'.$s.'%')
            ->get();
        }
        // $students->load('internship.professor');
        $students->load('internship','stream');


        //$students = Student::isActive();
        //dd($students);
        /*->with(['people' => function ($query) {
            $query->where('scholar_year', '=', '2018-2019');
        }])
        ->has('internship')
        ->paginate();*/
        /*$internships = Internship::has('people')
        ->orderBy('created_at', 'DESC');*/
        /*->with(['user' => function ($query,$s) {
            $query->where('name', 'like', '%'.$s.'%');
        }])
        where('first_name', 'like', '%'.$s.'%')
        ->orWhere('last_name', 'like', '%'.$s.'%')
        ->->with(['internship'])
        */
        //$people = Student::where('scholar_year','=','2018-2019');
        
    return view('frontend.internships.signing.index', compact('students'));

    }    

    public function show($id)
    {

    }
    
    public function create(Request $request)
    {
        $id=$request->id;
        $internship = Internship::find($id);
        /* DB::table('internshipsview')
            ->select('*')
            ->where('id',$id)
            ->get();*/
            //

            //dd($id);
    return view('frontend.internships.signing.sign', compact('internship'));
    }
    public function store(Request $request)
    {

        $internship = Internship::find($request->id);
        $internship->is_signed = user()->id;
        $internship->save();

        return view('frontend.internships.signing.thanks',compact('internship'));
        //return redirect()->back();
    }
    public function downloadExcel($type)
    {
        return Excel::download(new StagesExport, 'Declarations.xlsx');
    }


}
