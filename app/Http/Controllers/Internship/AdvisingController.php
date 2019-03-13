<?php


namespace App\Http\Controllers\Internship;

use App\Models\School\Internship\Internship;
use App\Models\School\Internship\Adviser;
use App\Models\School\Profile\People;

use App\Http\Controllers\Controller;
use App\Exports\StagesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Stage;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class AdvisingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function index(Request $request)
    {
        
        /*->with(['user' => function ($query,$s) {
            $query->where('name', 'like', '%'.$s.'%');
        }])
        where('fname', 'like', '%'.$s.'%')
        ->orWhere('lname', 'like', '%'.$s.'%')
        ->->with(['internship'])
        */
        if(!isset($request->s)){
        $trainees = People::has('internship')->where('is_active',true)
        ->with(['internship' => function ($q) {
            $q->orderBy('created_at', 'desc');
          }])->latest()
        ->paginate();
        //$trainees = People::isActive();
        //dd($trainees);
        }else{
        $s=$request->s;

        $trainees = People::with('internship')->has('internship')
        ->where('is_active',true)
        ->where('fname', 'like', '%'.$s.'%')
        ->orWhere('lname', 'like', '%'.$s.'%')
        ->get();
        }
        /*->with(['people' => function ($query) {
            $query->where('scholar_year', '=', '2018-2019');
        }])
        ->has('internship')

        ->paginate();*/
        /*$internships = Internship::has('people')
        ->orderBy('created_at', 'DESC');*/


        //$people = People::where('scholar_year','=','2018-2019');
    return view('space.internship.advising.index', compact('trainees'));

    }    

    public function show($id)
    {

    }
    
    public function create(Request $request)
    {
        $id=$request->pfe_id;
        $encadrements = DB::table('internshipsview')
            ->select('*')
            ->where('id','=',$id)
            ->get();
            //
            $profs = User::getProfessors();
            //dd($profs);
    return view('space.internship.advising.create', compact('encadrements','profs'));
    }
    public function store(Request $request)
    {
        //$request->advisor;
        //dd($request);
        //$input = $request->only('pfe_id', 'advisor');
        $request['user_id']=auth()->user()->id;
        $newAdviser=collect([
            'id_internship' => $request->pfe_id,
            'id_prof' => $request->advisor1,
            'id_encad2' => $request->advisor2,
            'id_exami1' => $request->id_exami1,
            'id_exami2' => $request->id_exami2,
            'id_exami3' => $request->id_exami3,
            'user_id' => auth()->user()->id
        ]);


        //$adviser = Adviser::firstOrCreate(['id_internship' => $request->pfe_id]);
        $adviser = Adviser::updateOrCreate(
            ['id_internship' => $request->pfe_id],
            $newAdviser->filter()
            ->all()
            );

        //dd($adviser->all());
        //$adviser->update($newAdviser->filter()->all());
        //$adviser->update();

        
        $adviser->save();
        $advisers=Adviser::find($request->pfe_id);
        return view('space.internship.advising.thanks',compact('advisers'));
        //return redirect()->back();
    }
    public function downloadExcel($type)
    {
        return Excel::download(new StagesExport, 'Declarations.xlsx');
    }


}
