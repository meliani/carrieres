<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use \App\Models\School\Internship\Internship;
use \App\Models\Profile\Student;

class DefensesExport implements FromView
{

    public function view(): View
    {
        // Internship::with('people');
        $students = Student::with('internship.binome')
        ->whereHas('internship', 
        function ($query) {
            $query->where('year_id','=',current_year_id())
            ->where('graduated_at','=',null)->where('current_year','=','ThirdYear');
        })->get();
        return view('frontend.documents.excel.templates.internships',compact('students'));
    }
}
