<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use \App\Models\School\Internship\Internship;
use App\Models\Profile\Professor;

class planningByProfessor implements FromView
{

    public function view(): View
    {
        Internship::with('people');
        $collection = Professor::with('internships')->get();

        return view('frontend.documents.excel.templates.planning_by_professor',compact('collection'));
    }
}
