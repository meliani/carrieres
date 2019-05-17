<?php

namespace App\Http\Controllers\Frontend\Internship;

use App\Http\Controllers\Controller;
use App\Models\School\Internship\Internship;
use Illuminate\Http\Request;

class myInternshipController extends Controller
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
        return view('frontend.internships.internship.create');
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
        $request->validate([
            'raison_sociale' => 'required|max:191',
            'intitule' => 'required|max:191',
            'adresse' => 'required|max:191',
            'descriptif' => 'required|max:191',
            'keywords' => 'required|max:191',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'parrain_titre' => 'required|max:191',
            'parrain_nom' => 'required|max:191',
            'parrain_prenom' => 'required|max:191',
            'parrain_fonction' => 'required|max:191',
            'parrain_tel' => 'required|max:191',
            'parrain_mail' => 'required|email',
            'encadrant_ext_titre' => 'required|max:191',
            'encadrant_ext_nom' => 'required|max:191',
            'encadrant_ext_prenom' => 'required|max:191',
            'encadrant_ext_fonction' => 'required|max:191',
            'encadrant_ext_tel' => 'required|max:191',
            'encadrant_ext_mail' => 'required|email',
        ]);
        $input = $request->all();
        //dd($request->user()->id);
        $internship = Internship::create($input);
        //Flash::success('Votre déclaration a été bien enregistrée.');
        return redirect(route('submit.create'))
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
