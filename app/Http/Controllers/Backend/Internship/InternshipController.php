<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship;
use Illuminate\Http\Request;
use \App\Models\Profile\Student;

class InternshipController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $internships = Internship::latest()->paginate();
        if(request()->has('s')){
            $trainees = Student::with('internship')
            ->Where('first_name','like','%'.request('s').'%')
            ->orWhere('last_name','like','%'.request('s').'%')
            ->orWhere('pfe_id',request('s'))
            ->latest()->get();  
        }else{
        //$trainees = \App\Models\School\Internship::where('scholar_year','2018-2019')->with('people')->get();
        $trainees = Student::has('internship')->with('internship')
        ->where('scholar_year','2018-2019')
        ->Where('ine','3')
        ->latest('created_at')->paginate();
        //$trainees = \App\Models\School\Internship::with
        //$trainees = $trainees->people();
        }
        return view('backend.internship.index',compact('internships'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clone($intertnship_id,$user_id)
    {
        session(['internship_id' => $intertnship_id]);
        session(['user_id' => $user_id]);
        $internship = Internship::find($intertnship_id);
        return view('backend.internship.create',compact('internship'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($internship = null)
    {
        return view('backend.internship.create',compact('internship'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $input = $request->all();
        //dd($request->user()->id);
        $internship = new Internship($input);
        if($request->session()->has('user_id'))
        {
            $internship->user()->associate(session('user_id'));
        }else{
            $internship->user()->associate(user()->id);
        }
        
        
        $internship->groupes()->attach(request('binome_user_id'));
        $internship->save();
        //flash()->success('Votre déclaration a été bien enregistrée.');
        return back()
        ->with('message', 'Votre déclaration a été bien enregistrée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function show(Internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Internship  $internship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
        //
    }
}
