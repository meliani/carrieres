<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
class JoinProject extends Component
{
    public $projects = [];
    public $project;

    public function render()
    {
        $this->projects = Project::all();

        $this->projects = $this->projects->mapWithKeys(function ($project) {
            return [$project->id => $project->title];
        });
        return view('livewire.join-project');
    }
    
    public function joinProject()
    {
        dd($this->project);
        $project = Project::find($this->project->id);
        dd($project);
        // $project->students()->attach(auth()->user()->id);
        session()->flash('message', 'You have joined the project successfully');
    }
}
