<?php

namespace App\Http\Controllers\Frontend\Internship;

use App\Http\Controllers\Controller;
use App\Models\School\Internship;
use Illuminate\Http\Request;
use App\Models\School\Profile\Student;
use App\Models\School\Profile\People;
use Flash;
class BinomeController extends Controller
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
        $students = Student::where('ine','=',auth()->user()->people->ine)
        ->active()
        ->get(['id','fname','lname'])
        ->pluck('name','id')->all();
        return view('frontend.internships.my_internship.binome.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $internship = Internship::where('user_id', '=', auth()->user()->id)
        ->firstOrFail();
        $internship->binome()->associate(request('binome_user_id'));
        $internship->binomes()->associate(request('binome_user_id'));
        $internship->save();
        Flash::success('Votre déclaration a été bien enregistrée.');
        return back();
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
