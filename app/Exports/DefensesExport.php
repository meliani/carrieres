<?php

namespace App\Exports;

use App\Models\Profile\Student;
use App\Models\School\Internship\Internship;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DefensesExport implements FromView
{
    public function view(): View
    {
        // Internship::with('people');
        $students = Student::with('internship.binome')
            ->whereHas('internship',
                function ($query) {
                    $query->where('year_id', '=', level_id())
                        ->where('graduated_at', '=', null)->where('level', '=', 'ThirdYear');
                })->get();

        return view('frontend.documents.excel.templates.internships', compact('students'));
    }
}
