<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Models\School\Internship\Adviser;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseController as Controller;
use App\Models\School\Internship;
use App\Models\Profile\Professor;
use App\Models\School\Internship\Project;
use Carbon\Carbon;

class AdviserController extends Controller
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
     * @param  \App\Models\Backend\Internship\Adviser  $adviser
     * @return \Illuminate\Http\Response
     */
    public function show($project_id)
    {
        $this->selected_id = $project_id;
        // dd($project_id);

        $this->selected_project = Project::find($this->selected_id);
        $this->professors = Professor::active()->get()->pluck('full_name_department','id');

        // Log::debug("Internship:mounted : ".$this->selectedInternship);

        return view('backend.internships.adviser.add_adviser', ['project'=>$this->selected_project,
    'professors' => $this->professors]);
    // return view('backend.internships.add_adviser');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Internship\Adviser  $adviser
     * @return \Illuminate\Http\Response
     */
    public function edit(Adviser $adviser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Internship\Adviser  $adviser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project_id)
    {
        $this->selected_id = $project_id;
        $this->agent_id = user()->id;


        $this->selected_project = Project::find($this->selected_id);
// dd(Professor::find($request->professor_id));
// dd($this->selected_project);
        Professor::find($request->professor_id)->projects->advisers()->save($this->selected_project);
/*         new adviser(
            professor_id
            project_id
            agent_id
        ); */
        // $this->selected_project->advisers()->save(Professor::find($request->professor_id));
        // dd($this->selected_project->advisers);
        $this->selected_project->validation_date = Carbon::createFromDate($request->advising_validation_date);

        $this->selected_project->timestamps = false;
        $this->selected_project->save(['timestamps' => false]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Internship\Adviser  $adviser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adviser $adviser)
    {
        //
    }
}
