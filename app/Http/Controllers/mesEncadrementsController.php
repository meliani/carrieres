<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class mesEncadrementsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function index()
    {
        $encadrements = DB::table('internshipsview')
        ->select('*')
        ->orderBy('created_at', 'DESC')
        ->paginate(10);

    return view('mesEncadrements.index', compact('encadrements'));
    }
    public function show($id)
    {
        $encadrements = DB::table('internshipsview')
        ->select('*')
        ->where('id','=',$id)
        ->get();
        $profs=mesEncadrementsController::getProfs();
        //dd($profs);
        $encadrants = mesEncadrementsController::getAdvisors($id);
        $NbAdvisors = mesEncadrementsController::getNbAdvisors($id);
    return view('mesEncadrements.show', compact('encadrements','profs','encadrants','NbAdvisors'));
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
    public function encadrer(Request $request)
    {
        foreach ($request->profs_advisor as $advisor)
        {
        //attach to model
        DB::insert('insert into encadrements set id_internship='.$request->pfe_id.', id_prof='.$advisor);
        }
        $encadrants=mesEncadrementsController::getAdvisors($request->pfe_id);
        return view('mesEncadrements.encadrer', compact('request','encadrants'));
    }

    public function getNbAdvisors($id_pfe)
    {
        $NbAdvisors = DB::table('viewencadrants')
        ->select('*')
        ->where('id','=',$id_pfe)
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
}
