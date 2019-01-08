<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class mesEncadrementsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function index()
    {
        $encadrements = DB::table('viewencadrants')
        ->select('*')
        ->where('advisorName','like',Auth::user()->name)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
//dd($encadrements);
    return view('pfeEncadrements.myList', compact('encadrements'));
    }    

}
