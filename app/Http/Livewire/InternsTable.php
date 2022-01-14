<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Profile\Student;
use App\Models\School\Internship;

class InternsTable extends Component
{
    public $search = '';

    protected $internships = '';


    public function render()
    {
        $internships = Internship::whereHas('student', function ($query) {
            $query->where('user_id','=', "%{$this->search}%")
            ->orWhere('last_name','LIKE' , "%{$this->search}%")
            ->orWhere('first_name','LIKE' , "%{$this->search}%");
            
        })->get();
        
        $students =         [
            'students' => Student::where('first_name','LIKE' , "%{$this->search}%")
            ->orWhere('last_name','LIKE' , "%{$this->search}%")
            ->orWhere('user_id','LIKE' , "%{$this->search}%")
            ->get(),
        ];

        return view('livewire.interns-table', 
        [
            'internships' => $internships
        ]
    );
    }
}
