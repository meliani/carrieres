<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Profile\Student;
use App\Models\School\Internship;
use Illuminate\Support\Facades\Log;

// Excel export libs
use App\Exports\StagesExport;
use Maatwebsite\Excel\Facades\Excel;

class InternsTable extends Component
{
    public $search = '';

    protected $internships;
    public Internship $internship;
    public $signing_date = '';
    public $pedagogic_validation = '';
    public $signatureDetails;
    //public $selectedInternshipId;

    protected $rules = [
        'internship.pedagogic_validation' => 'date',
        'signatureDetails' => ''
    ];

    // protected $listeners = ['addPedagogicValidation' => 'addPedagogicValidationModal'];

    public function mount(){

        $this->loadInternships();
        //Log::debug("InternsTable > loadInternships >> internships mounted on Livewire>>InternsTable");

/*         $students =         [
            'students' => Student::where('first_name','LIKE' , "%{$this->search}%")
            ->orWhere('last_name','LIKE' , "%{$this->search}%")
            ->orWhere('user_id','LIKE' , "%{$this->search}%")
            ->get(),
        ]; */
    }
    public function loadInternships(){
        $this->internships = Internship::whereHas('student', function ($query) {
            $query->where('user_id','=', "%$this->search%")
            ->orWhere('last_name','LIKE' , "%{$this->search}%")
            ->orWhere('first_name','LIKE' , "%{$this->search}%");
        })->take(10)->get();
    }
    public function render()
    {
        $this->loadInternships();
        //dd($this->attributes);
        return view('livewire.interns-table', 
        [
            'internships' => $this->internships
        ]
    );
    }


    public function addPedagogicValidationModal(Internship $selectedInternship){
        $this->selectedInternship = $selectedInternship;

        $this->emit('showSigningPanel', $this->selectedInternship);
        //$this->dispatchBrowserEvent('openValidationModal', $this->selectedInternshipId);
    }
}
