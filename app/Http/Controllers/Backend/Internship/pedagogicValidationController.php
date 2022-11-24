<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\School\Internship;
use Illuminate\Support\Facades\Log;
use App\Models\Profile\Professor;
use Carbon\Carbon;
use Livewire\Component;
use Output;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Output\ConsoleOutput;

class pedagogicValidationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public Internship $selected_internship;
    public $agent_id, $professors, $selected_id;
    public Carbon $pedagogic_validation_date;

    public function __construct()
    {
        // $this->middleware(['Admin']);
    }
    public function index($internship_id)
    {
        $this->selected_id = $internship_id;

        $this->selected_internship = Internship::find($this->selected_id);
        $this->professors = Professor::where('is_branche_coordinator',1)->get()->pluck('name','id');

        // Log::debug("Internship:mounted : ".$this->selectedInternship);

        return view('backend.internships.partials.pedagogic_validation', ['internship'=>$this->selected_internship,
    'professors' => $this->professors]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('', ['selectedInternship' => $this->selectedInternship, 'signature_details' => $this->signature_details]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $internship_id)
    {
        $this->selected_id = $internship_id;
        $this->agent_id = auth()->user()->id;

        $this->selected_internship = Internship::find($this->selected_id);
        $this->selected_internship->pedagogic_validation_date = Carbon::createFromDate($request->pedagogic_validation_date);
// dd($request);
        $this->meta_pedagogic_validation = [
            'signatures' => [
                'agent_id' => $this->agent_id,
                'professor_id' => $request->professor_id,
            ],
            'dates' => [
                'created_at' => $this->selected_internship->pedagogic_validation_date,
                'edited_at' => Carbon::now(),
            ],
        ];
        $this->selected_internship->meta_pedagogic_validation = $this->meta_pedagogic_validation;


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
