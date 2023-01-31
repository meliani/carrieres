<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\School\Stream;
use Illuminate\Http\Request;
use App\Models\Profile\Student;
class InitController extends Controller
{
    private $currentPin;
    private $streamOrder;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::has('internship')->with('internship')
        ->with(['stream' => function ($query) {
            $query->orderBy('order','ASC');
        }])->get();
        // ->orderBy('full_name', 'ASC')->get();
        $students->sortBy('student.stream.order');

        // Annother logic
        $streams = Stream::with(['students' => function ($query) {
            $query->orderBy('full_name','ASC');
        }])->get();
        //return view with list of possible actions
        return view('backend.init.index',['streams'=>$streams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $students)
    {
        $streams = Stream::with(['students' => function ($query) {
            $query->orderBy('full_name','ASC');
        }])->get();

        foreach ($streams as $stream) {
            $this->currentPin = 0;
            $this->streamOrder = $stream->order;
                $this->generateIds($stream->students );
            echo $stream->order. " - ";
            // foreach ($stream->students as $student) {
            //     $this->generateIds();
            // }
        }
    }
    public function generateIds($students)
    {
        // $students = App\Models\Profile\Student::orderBy('full_name', 'ASC')->get();
        // App\Models\Profile\Student::where('is_active')->WhereNot('model_status_id')
        // ->with(['stream' => function ($query) {$query->orderBy('order','ASC');}])->orderBy('full_name', 'ASC')->first();
        // $latestPin = App\Student::orderBy('pin','DESC')->first();
        $students->each(function($student){
            $this->currentPin++;
            echo " current pin : ". $this->currentPin ." - ".$this->streamOrder."<br>" ;
            // $student->setPin($student, $this->currentPin,$streamOrder);
            $student->pin = $this->streamOrder.str_pad($this->currentPin, 2, "0", STR_PAD_LEFT);
            $student->save();
            }
        );

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
