<?php


namespace App\Http\Controllers;

use App\Exports\StagesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Stage;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class pfeEncadrementsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function index(Request $request)
    {
        //dd($request->s);
        $s=$request->s;
        $encadrements = DB::table('internshipsview')
        ->select('*')
        ->where('student_name','like','%'.$s.'%')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
        $advisors=pfeEncadrementsController::getAllAdvisors();

    return view('pfeEncadrements.index', compact('encadrements','advisors'));
    }    

    public function show($id)
    {

    }
    public function getProfs()
    {
        $queries = DB::table('school_profs')
        ->select('departement_id','id','name')
        //->groupBy('departement_id')
        ->get();
        $results = array();
        $dept = null;
        foreach ($queries as $query)
        {
            //$results[] = [ $query->departement_id => [$query->id => $query->name] ] ;
            if($dept!=$query->departement_id){
            $dept=$query->departement_id;
            $results[] = [$dept => [$query->id=>$query->name]];
            }
            else
            $results[] = [$query->id=>$query->name];
        }

        return $results;
    }
    public function create(Request $request)
    {
        $id=$request->pfe_id;
        $encadrements = DB::table('internshipsview')
        ->select('*')
        ->where('id','=',$id)
        ->get();
        $profs=pfeEncadrementsController::getProfessors();
        //dd($profs);
        $encadrants = pfeEncadrementsController::getAdvisors($id);
        $NbAdvisors = pfeEncadrementsController::getNbAdvisors($id);
    return view('pfeEncadrements.create', compact('encadrements','profs','encadrants','NbAdvisors'));
    }
    public function store(Request $request)
    {
        foreach ($request->profs_advisor as $advisor)
        {
        //attach to model
        //DB::table('internships')->increment('nbr_advisors', 1, ['id' => $request->pfe_id]);
        DB::insert('insert into encadrements set id_internship='.$request->pfe_id.', id_prof='.$advisor.',user_id='.Auth::user()->id);
        DB::update('update internships set nbr_advisors = nbr_advisors + 1 where id = ?', [$request->pfe_id]);
        }
        $encadrants=pfeEncadrementsController::getAdvisors($request->pfe_id);
        return view('pfeEncadrements.thanks', compact('request','encadrants'));
    }
    public function getProfessors()
    {
        $queries = DB::table('users')
        ->select('id','name')
        ->where('is_professor','=',1)
        //->groupBy('departement_id')
        ->get();
        $results = array();
        $dept = null;
        foreach ($queries as $query)
        {
            //$results[] = [ $query->departement_id => [$query->id => $query->name] ] ;
            $results[] = [$query->id=>$query->name];
        }

        return $results;
    }

    public function getNbAdvisors($id_pfe)
    {

        $NbAdvisors = DB::table('encadrements')
        ->select('*')
        ->where('id_internship','=',$id_pfe)
        ->count();
        if($NbAdvisors>0)
        return $NbAdvisors;
        else
        return false;
    }
    public function getAdvisors($id_pfe)
    {
        $encadrants = DB::table('viewencadrants')
        ->select('*')
        ->where('id','=',$id_pfe)
        ->get();

        return $encadrants;
    }
    public function getAllAdvisors()
    {
        $encadrants = DB::table('viewencadrants')
        ->select('*')
        ->get();

        return $encadrants;
    }
    public function export() 
    {
        return Excel::download(new StagesExport, 'Declarations.xlsx');
    }
    public function downloadExcel($type)
    {
        return Excel::download(new StagesExport, 'Declarations.xlsx');

        /*
        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);*/
    }

}
