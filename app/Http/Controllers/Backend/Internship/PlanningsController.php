<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship\Defense;
use Illuminate\Http\Request;
use App\Models\Profile\Professor;

class PlanningsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('s'))
        $collection = Professor::with('internships')->where('first_name','like','%'.request('s').'%')
        ->orWhere('last_name','like','%'.request('s').'%')->get();
        else
        $collection = Professor::with('internships')->paginate();

        return view('backend.internships.defenses.plannings.professors.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Defense  $defense
     * @return \Illuminate\Http\Response
     */
    public function show(Defense $defense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Defense  $defense
     * @return \Illuminate\Http\Response
     */
    public function edit(Defense $defense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Defense  $defense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Defense $defense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Defense  $defense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defense $defense)
    {
        //
    }
}
