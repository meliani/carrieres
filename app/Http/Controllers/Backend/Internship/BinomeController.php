<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Frontend\BaseController;
use App\Models\School\Internship\Internship;
use Illuminate\Http\Request;
use App\Models\Profile\Student;
use App\Models\Profile\Person;

class BinomeController extends BaseController
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
        $students = Student::where('ine','=',3)
        ->get(['user_id','first_name','last_name'])
        ->pluck('name','user_id')->all();
        session(['internship_id' => request('internship_id')]);
        return view('backend.internships.binome.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->session()->has('internship_id')){
        $internship = Internship::where('id', '=', session('internship_id'))
        ->firstOrFail();
        $internship_b = Internship::where('user_id', '=', request('binome_user_id'))
        ->firstOrFail();
        }else{
        $internship = Internship::where('user_id', '=', auth()->user()->id)
        ->firstOrFail();
        $internship_b = Internship::where('user_id', '=', request('binome_user_id'))
        ->firstOrFail();
        }



        $internship->binome()->associate(request('binome_user_id'));
        $internship->groupes()->sync(request('binome_user_id'));
        $internship->save();

        $internship_b->binome()->associate($internship->user_id);
        $internship_b->groupes()->sync($internship->user_id);
        $internship_b->save();

        flash()->success('Votre binome a été bien enregistrée.');
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
