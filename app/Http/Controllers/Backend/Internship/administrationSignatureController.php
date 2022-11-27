<?php

namespace App\Http\Controllers\Backend\Internship;

use App\Http\Controllers\Controller;
use App\Models\Core\Parameter;
use App\Models\Profile\Person;
use Illuminate\Http\Request;

use App\Models\School\Internship;
use App\Models\Profile\Professor;
use App\Models\Profile\Signatory;
use Carbon\Carbon;

class administrationSignatureController extends Controller
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
        
        // $this->siganture = Professor::where('is_branche_coordinator',1)->get()->pluck('name','id');
        $signatory_id = Parameter::where('name','main_signatory_id')->get()->pluck('value');
        // dd($signatory_id);
        $this->signatory = Person::where('user_id',$signatory_id)->get()->pluck('full_name','user_id');

        // Log::debug("Internship:mounted : ".$this->selectedInternship);

        return view('backend.internships.partials.administration_signature', ['internship'=>$this->selected_internship,
    'signatory' => $this->signatory]);
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
        $this->selected_internship->administration_signed_at = Carbon::createFromDate($request->validation_date);
// dd($request);
        $this->meta_signature = [
            'signatures' => [
                'agent_id' => $this->agent_id,
                'signatory_id' => $request->signatory_id,
            ],
            'dates' => [
                'created_at' => $this->selected_internship->administration_signed_at,
                'edited_at' => Carbon::now(),
            ],
        ];
        $this->selected_internship->meta_administration_signature = $this->meta_signature;


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
