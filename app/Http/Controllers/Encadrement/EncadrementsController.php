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
        $encadrements = Encadrement::paginate();
        
        return view('Encadrement.mesEncadrements.index', compact('encadrements'));
    }

}
