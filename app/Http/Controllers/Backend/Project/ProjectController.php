<?php

namespace App\Http\Controllers\Backend\Project;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\BaseController as Controller;
use App\Models\School\Project\Project;
use Illuminate\Http\Request;
use App\Models\School\Internship\Internship;
use App\Models\Profile\Student;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use App\Models\School\Project\Team;


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
        // Auth::user()->id;

        // $project = Project::findOrFail(Auth::user()->id);
        // $project = Project::findOrFail('team_uuid','=',$project->uuid)->with('students','internship');
        // dd($project);

        // the relation internship should handle the logic of the project view
        // that means we need to flag the team founder to keep 
        // the project informations always linked with one record from database

        // return view('my team members and project informations from the founder\'s internship');


        $internships = Internship::with('student')->latest();
        $trainees = Student::has('internship')
        ->with('internship')
        ->latest()->get();
        // dd($trainees);
        return view('backend.internships.validation.index', ["trainees"=>$trainees]);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=$request->id;
        $internship = Internship::find($id);

            //dd($id);
    // return view('frontend.internships.signing.sign', compact('internship'));
        return view('backend.internships.validation.validate',['internship'=>$internship]);
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
        $student_id=Auth::user()->id;
        $team = Team::find(['student_id'=>$student_id]);
        // dd($team);
        // empty() is_null()
        if(!empty($team) || !is_null($team))
        {
        $team = New Team([
            'student_id'=>$student_id,
            'team_uuid'=>Str::uuid()
        ]);
        $team->save();
        // $student = Student::findOrFail($student_id);
        }else{

        }
        // $input=$request->validated();
        // $offer = new Offer($input);
        // $offer->year()->associate(config('school.current.year_id'));
        // $offer->program()->associate(3);
        // $offer->save();

        $project = New Project([
            'project_uuid'=>Str::uuid(),
            'team_uuid'=>$team->team_uuid
        ]);
        $project->save();
        flash()->success(__('Team created successfully'));

        // $internship = Internship::find($request->id);
        // $internship->is_signed = user()->id;
        // $internship->save();
        // dd($project);
        return view('backend.internships.validation.thanks',compact('project'));
        //return redirect()->back();
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
