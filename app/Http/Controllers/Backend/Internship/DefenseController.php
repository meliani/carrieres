<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Models\School\Defense;
use Illuminate\Http\Request;

class DefenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $defenses = Defense::all();

        return view('backend.internships.defenses.index',compact('defenses'));
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
