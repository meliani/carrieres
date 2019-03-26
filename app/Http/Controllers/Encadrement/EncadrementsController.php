<?php


namespace App\Http\Controllers\Encadrement;

use App\Models\Encadrement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EncadrementsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);        
    }

    public function index()
    {
        $encadrements = Encadrement::where('id_prof', '=', Auth::user()->id)->paginate();
        $encadrements2 = Encadrement::where('id_encad2', '=', Auth::user()->id)->paginate();

        return view('Encadrement.mesEncadrements.index', compact('encadrements','encadrements2'));
    }

}
