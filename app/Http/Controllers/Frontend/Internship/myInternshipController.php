<?php

namespace App\Http\Controllers\Frontend\Internship;

use App\Http\Controllers\Frontend\BaseController;
use App\Http\Requests\StoreInternshipPFE;
use App\Models\School\Internship\Internship;

class myInternshipController extends BaseController
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
    public function clone()
    {
        if (! is_null(request('id'))) {
            $internship = Internship::find(request('id'));

            return view('frontend.internships.my_internship.create', compact('internship'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $internship = Internship::firstOrNew(['student_id' => user()->id]);
        if ($internship->status === 'Draft') {
            return view('frontend.internships.my_internship.create', compact('internship'));
        } elseif ($internship->status === 'Announced') {
            return view('frontend.documents.index', compact('internship'));
        } elseif ($internship->status === 'Signed') {
            return view('frontend.documents.index', compact('internship'));
        } else {
            return view('frontend.internships.my_internship.create', compact('internship'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInternshipPFE $request)
    {
        //dump($request);

        $intern = $request->validated();
        $internship = Internship::firstOrCreate(['student_id' => user()->id]);
        $internship->fill($intern);
        $internship->student()->associate(user()->id);
        $internship->year_id = config('school.current.year_id');
        $internship->status = 'Draft';

        if (isset($request->action)) {
            $internship->announced_at = now();
            // $internship->is_valid = 1;
            $internship->status = 'Announced';
        }
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
        return view('frontend.internships.my_internship.show', compact('internship'));
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
    public function update(StoreInternshipPFE $request, Internship $internship)
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
