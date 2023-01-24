<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use \App\Models\School\Internship\Internship;
class InternshipsExport implements FromView
{

    public function view(): View
    {
        Internship::with('people');
        return view('frontend.documents.excel.templates.internships');
    }
}
