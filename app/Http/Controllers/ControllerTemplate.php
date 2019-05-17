<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Exports\StagesExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use Maatwebsite\Excel\Concerns\FromView;

class ControllerTemplate extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);
        $this->middleware('auth');
    }

    /** ------ playing with files -------- */

    $file = $request->file('photo');
    //File Name
    $file->getClientOriginalName();

    //Display File Extension
    $file->getClientOriginalExtension();

    //Display File Real Path
    $file->getRealPath();

    
    $file->getSize();//Display File Size

    
    $file->getMimeType(); //Display File Mime Type

    //Move Uploaded File
    $destinationPath = 'uploads';
    $file->move($destinationPath,$file->getClientOriginalName());