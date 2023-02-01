<?php

namespace App\Http\Controllers\Backend\Supervisor;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\BaseController as Controller;
use App\Models\School\Supervisor\Supervisor;
use Illuminate\Http\Request;
use App\Models\School\Internship\Internship;
use App\Models\Profile\Student;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use App\Models\School\Supervisor\Team;


class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        return view('backend.supervisor.index', ["supervisors"=>$supervisors]);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('backend.supervisor.create',['internship'=>$internship]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Supervisor\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Supervisor\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisor $supervisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Supervisor\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Supervisor\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisor $supervisor)
    {
        //
    }
}
