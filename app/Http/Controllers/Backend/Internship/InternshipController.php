<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Backend\BaseController;
use App\Models\School\Internship;
use Illuminate\Http\Request;
use \App\Models\School\Profile\Student;

class InternshipController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$trainees = \App\Models\School\Internship::where('scholar_year','2018-2019')->with('people')->get();
        $trainees = Student::has('internship')->with('internship')
        ->where('scholar_year','2018-2019')
        ->Where('ine','3')
        ->latest()->paginate();
        //$trainees = \App\Models\School\Internship::with

        //$trainees = $trainees->people();

        return view('backend.internship.index',compact('trainees'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clone()
    {
        if(!is_null(request('id'))){
        $internship = Internship::find(request('id'));
        return view('frontend.internships.my_internship.create',compact('internship'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $internship ='';
        return view('frontend.internships.my_internship.create',compact('internship'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //dump($request);

        $input = $request->all();
        //dd($request->user()->id);
        $internship = new Internship($input);
        $internship->user()->associate(auth()->user()->id);
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
