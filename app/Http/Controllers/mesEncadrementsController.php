<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mesEncadrementsController extends Controller
{
    public function index()
    {
        $encadrements = DB::table('internshipsview')
        ->select('*')
        ->orderBy('created_at', 'DESC')
        ->paginate(10); // you were missing the get method

    return view('mesEncadrements.index', compact('encadrements'));
    }
}
