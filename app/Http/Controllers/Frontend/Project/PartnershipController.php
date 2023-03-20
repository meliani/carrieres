<?php

namespace App\Http\Controllers\Frontend\Project;

use App\Http\Controllers\Frontend\BaseController as Controller;
use App\Models\School\Project\Team;
use App\Models\School\Project\Project;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
    //Display partnership status
    //if student have partnership invitation or concrete one
    //else call create partnership view

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //Display possible partners list to select from
    // the list should be sorted by stream then by name

    //maybe a live list with livewire with a search field
    //and dynamic buttons if someone is already taken or so

    // in case of invite call invite function
    
    //if the student have an invitation display it without selection screen

        return view('frontend.teams.create'); //['action' => 'show_teams']
    }

    public function invite(Student $student){

    }
    public function accept(Team $team)
    {
        //check if team exist

        //check if student have a related teame before
        //check if the team is related to a project and break if true
        //if all update student record with the new team_uuid
        

        $student = Student::findOrFail(Auth::user()->id);
        //student who joins gonna have the same uuid and his id
        Team::create($team_uuid, $student_id);
        return view('you joined the team $team_uuid');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check if team exist

        //check if student have a related teame before
        //check if the team is related to a project and break if true
        //if all update student record with the new team_uuid



        //here the team gonna be created with it's uuid
        $student = Student::findOrFail(Auth::user()->id);

        Team::createOrFail(Str::Uuid(),$student_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Project\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Project\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Project\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Project\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
