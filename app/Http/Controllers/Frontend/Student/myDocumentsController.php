<?php

namespace App\Http\Controllers\Frontend\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Core\Documents\renderController;
use App\Models\Profile\Student;

class myDocumentsController extends Controller
{

    private $documents;
    private $student;

    public function __construct()
    {
        $this->middleware(['auth', 'Student']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $this->student = user()->student;
        // dd($this->student);

        if (!user()->student->internship()->exists()) {
            if (isset($request->action) && in_array('render', $request->action)) {
                if (in_array('delete', $request->action)) {
                    user()->student->clearMediaCollection('internship');
                }
                if (in_array('lr', $request->action)) {
                    $pdf = new renderController;
                    $pdf->recommendation_letter();
                }
            }
            if (user()->student->hasMedia('internship')) {
                $this->documents = user()->student->getMedia('internship');
            }
            return view('frontend.documents.partials.fillforms', ['documents' => $this->documents]);
        } else {
            if (isset($request->action)) {
                if (user()->student->internship->status === 'Draft' || !user()->student->internship->status)
                    return view('frontend.documents.partials.fillforms', ['documents' => $this->documents]);

                if ($this->student->is_mobility == 1) {
                    //dd($this->person->is_mobility);
                }
                if (in_array('delete', $request->action)) {
                    user()->student->clearMediaCollection('internship');
                }
                if (in_array('render', $request->action)) {
                    $pdf = new renderController;
                    if (in_array('global_agreement', $request->action)) {
                        $pdf->conventionGlobale();
                    }
                    if (in_array('france_agreement', $request->action)) {
                        $pdf->conventionFrance();
                    }
                    if (in_array('mobility_global_agreement', $request->action)) {
                        $pdf->conventionMobilityAutre();
                    }
                    if (in_array('mobility_france_agreement', $request->action)) {
                        $pdf->conventionMobilityFrance();
                    }
                    if (in_array('lr', $request->action)) {
                        $pdf = new renderController;
                        $pdf->recommendation_letter();
                    }
                }
            }

            if (user()->student->hasMedia('internship')) {
                $this->documents = user()->student->getMedia('internship');
                if (user()->student->internship->status === 'Draft' || !user()->student->internship->status)
                    return view('frontend.documents.partials.fillforms');

                return view('frontend.documents.index', ['documents' => $this->documents]);
            } else
                return view('frontend.documents.index');
        }
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
    public function update(Request $request, $id)
    {
        //
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
