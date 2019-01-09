<?php

namespace App\Exports;

use App\Models\Stage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class StagesExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stage::all();
    }
    public function headings(): array
    {
        return [
            '#',          
            'Nom et prénom',
            'Option',
            'Entreprise',
            'Titre du PFE',
            'Date de déclaration',
            'Nombre d\'encadrants'
        ];
    }
}
