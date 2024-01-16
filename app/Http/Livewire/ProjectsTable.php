<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Profile\Student;
use App\Models\School\Internship\Internship;
use Illuminate\Support\Facades\Log;

// Excel export libs
use App\Exports\StagesExport;
use App\Models\School\Internship\Project;
use Maatwebsite\Excel\Facades\Excel;

class ProjectsTable extends Component
{
    public $search = '';

    protected $internships;
    protected $projects;
    
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
        $this->projects = Internship::with(['student','binome'])->whereHas('student', function ($query) {
            $query->where('user_id','=', "%$this->search%")
            ->orWhere('last_name','LIKE' , "%{$this->search}%")
            ->orWhere('first_name','LIKE' , "%{$this->search}%")
            ->orWhere('program','LIKE' , "%{$this->search}%");
        })->latest()->get(); //->take(200)
    }
    public function render()
    {
        $this->loadInternships();
        //dd($this->attributes);
        return view('livewire.interns-table', 
        [
            'projects' => $this->projects
        ]
    );
    }


    public function addPedagogicValidationModal(Internship $selectedInternship){
        $this->selectedInternship = $selectedInternship;

        $this->emit('showSigningPanel', $this->selectedInternship);
        //$this->dispatchBrowserEvent('openValidationModal', $this->selectedInternshipId);
    }
}
