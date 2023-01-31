<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Models\School\Internship\Project;
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
     * @param  \App\Models\School\Intenrship\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\Intenrship\Project  $project
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
     * @param  \App\Models\School\Intenrship\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Add adviser to the project
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Intenrship\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function add_project_adviser(Request $request, Project $project)
    {
        return view('add_project_adviser');
    }
    /**
     * list advisers to the project
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School\Intenrship\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show_project_advisers(Request $request, Project $project)
    {
        // we can also do this direct from project / internship view Controller by loading advisers
        return view('show_project_advisers',['advisers' => $project->advisers]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\Intenrship\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
