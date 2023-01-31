<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Controller;
use App\Models\School\Internship\Internship;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NoteController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->selected_id = $id;

        $this->selected_internship = Internship::find($this->selected_id);

        // Log::debug("Internship:mounted : ".$this->selectedInternship);

        return view('backend.internships.partials.add_note', ['internship' => $this->selected_internship]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->selected_id = $id;

        $this->agent_id = auth()->user()->id;
        $this->selected_internship = Internship::find($this->selected_id);
        $this->notes = [
            'agent_name' => auth()->user()->name,
            'agent_id' => $this->agent_id,
            'note' => $request->note,
            'noted_at' => Carbon::now(),
    ];
        $this->selected_internship->update(['notes' => $this->notes]);

        $this->selected_internship->timestamps = false;
        $this->selected_internship->save(['timestamps' => false]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
