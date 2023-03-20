<?php

namespace App\Http\Controllers\Frontend\Project;

use App\Models\School\Project\Team;
use App\Http\Controllers\Frontend\BaseController as Controller;
use App\Models\Profile\Student;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::firstOrCreate([
            'student_id' => user()->id,
            // 'team_uuid' => Str::uuid(),
        ]);
        //student who joins gonna have the same uuid and his id
        //$team = Team::findOrFail('team_uuid','=',$team->uuid)->with('students','internship');

        // the relation internship should handle the logic of the project view
        // that means we need to flag the team founder to keep 
        // the project informations always linked with one record from database

        return view('frontend.teams.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('team created, add participants ?');
        // $students = Student::where('program_id','=',user()->student->program_id)->get('id','first_name');
        // return view('frontend.teams.create',['students'=>$students]);
    }
    public function join($team_uuid) :view
    {
        $student = Student::findOrFail(Auth::user()->id);
        //student who joins gonna have the same uuid and his id
        Team::create($team_uuid, $student_id);
        return view('you joined the team $team_uuid');
        return view('frontend.teams.join');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //here the team gonna be created with it's uuid
        $student = Student::findOrFail(Auth::user()->id);

        Team::createOrFail(Str::Uuid(),$student_id);    
        return view('team created, add participants ?');

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
