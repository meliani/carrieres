<?php

namespace App\Http\Controllers\Backend\Project;

use App\Http\Controllers\Backend\BaseController as Controller;
use App\Models\School\Project\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        Auth::user()->id();

        $project = Project::findOrFail(Auth::user()->id);
        $project = Project::findOrFail('team_uuid','=',$project->uuid)->with('students','internship');
        
        // the relation internship should handle the logic of the project view
        // that means we need to flag the team founder to keep 
        // the project informations always linked with one record from database

        return view('my team members and project informations from the founder\'s internship');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.internships.validate.index');
    }
    public function join($team_uuid):view
    {
        $student = Student::findOrFail(Auth::user()->id);
        //student who joins gonna have the same uuid and his id
        Project::create($team_uuid, $student_id);
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
        //here the team gonna be created with it's uuid
        $student = Student::findOrFail(Auth::user()->id);

        Project::createOrFail(Str::Uuid(),$student_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\Project\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Project\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Project\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Project\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
