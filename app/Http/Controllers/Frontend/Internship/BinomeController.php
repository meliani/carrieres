<?php

namespace App\Http\Controllers\Frontend\Internship;

use App\Http\Controllers\Frontend\BaseController;
use App\Models\Profile\Student;
use App\Models\School\Internship\Internship;
use Illuminate\Http\Request;

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
        $students = Student::where('level', '=', user()->student->level)
            ->get(['id', 'first_name', 'last_name'])
            ->pluck('name', 'id')->all();
        session(['internship_id' => request('internship_id')]);

        return view('frontend.internships.my_internship.binome.create', compact('students'))->with('message', 'Votre déclaration a été bien enregistrée.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->session()->has('internship_id')) {
            $internship = Internship::where('id', '=', session('internship_id'))
                ->firstOrFail();
        } else {
            $internship = Internship::where('student_id', '=', user()->id)
                ->firstOrFail();
        }

        $internship->binome()->associate(request('binome_user_id'));
        $internship->groupes()->sync(request('binome_user_id'));
        $internship->save();

        flash()->success('Votre binome a été bien enregistrée.');

        return back()->with('message', 'Votre déclaration de binôme a été bien enregistrée.');
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
