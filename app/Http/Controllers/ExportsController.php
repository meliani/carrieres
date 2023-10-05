<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportsController extends Controller
{
    public function index()
    {
        // getting exports from database
        $exports = \App\Models\Export::all();
        // passing data to view
        return view('extractions.index', compact('exports'));
    }
}
