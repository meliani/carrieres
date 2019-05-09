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
