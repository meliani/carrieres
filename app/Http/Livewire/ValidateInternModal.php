<?php

namespace App\Http\Livewire;

use App\Models\School\Internship;
use Illuminate\Support\Facades\Log;
use App\Models\Profile\Professor;
use Livewire\Component;
use Output;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Output\ConsoleOutput;


class ValidateInternModal extends Component
{
    public Internship $selectedInternship;

    // Model variables
    public $administrationAgentId;
    public $administrationAgentName;
    public $pedagogicValidatorName;

    public $profs;
    public $pedagogic_validator;
    // form variables
    public $signature_details;


    public $pedagogic_validation_date;
    public $meta_pedagogic_validation;
    public $administrative_validation_date;
    public $meta_administrative_validation;


    protected $listeners = [
        'openPedagogicValidationModal' => 'showValidationModal',
    ];

    public $rules = [
        'signature_details' => '',
    ];

    public function mount(Internship $selectedInternship){
        $this->profs = Professor::get()->pluck('id','name');
        $this->administrationAgentId = auth()->user()->id;
        $this->administrationAgentName = auth()->user()->name;
        $this->selectedInternship = $selectedInternship;
        
        Log::debug("Internship:mounted : ".$this->selectedInternship);
        //$this->selectedInternshipId;
        //$this->internship = Internship::find($this->selectedInternshipId);
        //$this->internships = $internships;
        //$this->selectedInternshipId = $this->internships[1]->id;
        //$this->selectedInternship = $this->internships[$this->selectedInternshipId];
        //dd($this->selectedInternshipId);
        //$this->internship = Internship::find($internship['id']);
    
    }

    public function showValidationModal(Internship $selectedInternship) {
        $this->selectedInternship = $selectedInternship;
        $this->mount($this->selectedInternship);
        $this->dispatchBrowserEvent('openValidationModal');
        //$refresh;
    }
    public function addPedagogicValidation(){
        //$this->validate();
        //Log::debug("addPedagogicValidation:clicked >> Request: ".request('signature_details'));
        //Log::debug("addPedagogicValidation:clicked >> signature_details: ".$signature_details);
        Log::debug("addPedagogicValidation:clicked >> this signature_details before manual affectation: ".$this->signature_details);

        //$this->signature_details = $signature_details;
        
        Log::debug("addPedagogicValidation:clicked >> this signature_details after manual affectation: ".$this->signature_details);

        
        // dd($this->selectedInternship->pedagogic_validation);
        //$this->render();
        //dd($this->signature_details);
        
        $this->meta_pedagogic_validation = [
            'signed_by' => [
                'user_id' => $this->administrationAgentId,
                'name' => $this->administrationAgentName
            ],
            'signed_for' => [
                'professor_id' => $this->pedagogic_validator,
            ],
        ];
        // dd($pedagogic_validation);
        $this->selectedInternship->meta_pedagogic_validation = $this->meta_pedagogic_validation;
        info('dump vars : '.'pedagogic_validation_date :'.$this->pedagogic_validation_date.'pedagogic_validator : '.$this->pedagogic_validator);
        //dd($this->selectedInternship);
        $this->selectedInternship->pedagogic_validation_date = $this->pedagogic_validation_date;
        info($this->selectedInternship);

        $this->selectedInternship->save();
        // $this->reset();
        $this->dispatchBrowserEvent('closeModal');

    }

    public function render()
    {

        return view('livewire.validate-intern-modal', ['selectedInternship' => $this->selectedInternship, 'signature_details' => $this->signature_details]);
    }


}
