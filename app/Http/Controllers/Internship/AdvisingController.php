<?php

namespace App\Http\Controllers\Internship;

// Models
use App\Models\School\Internship\Internship;
use App\Models\School\Internship\Adviser;
use App\Models\School\Profile\People;
use App\Models\Stage;
use App\User;
use App\Models\School\Profile\Professor;

use App\Http\Controllers\Controller;
use App\Exports\StagesExport;

use Maatwebsite\Excel\Facades\Excel;
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
        
        $trainees = People::has('internship')
        ->where('is_active',true)
        ->latest();
        
        $trainees = $trainees->with(['internship' => function ($q) {
            $q->latest();
        }])->paginate();
        
        if(!isset($request->s)){
            $trainees = People::has('internship')->where('is_active',true)
            ->with(['internship' => function ($q) {
                $q->orderBy('updated_at', 'desc');
            }])
            ->paginate();
        }else{
            $s=$request->s;
            $trainees = People::with('internship')->has('internship')
            ->where('is_active',true)
            ->where('fname', 'like', '%'.$s.'%')
            ->orWhere('lname', 'like', '%'.$s.'%')
            ->orWhere('pfe_id', 'like', '%'.$s.'%')
            ->get();
        }

        //$trainees = People::isActive();
        //dd($trainees);
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
        where('fname', 'like', '%'.$s.'%')
        ->orWhere('lname', 'like', '%'.$s.'%')
        ->->with(['internship'])
        */
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
            ->where('id',$id)
            ->get();
            //
            $profs = Professor::active()->orderBy('last_name')
            ->get(['id','first_name','last_name'])
            ->pluck('name','id')->all();
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
