<?php

namespace App\Exports;

use App\Models\Stage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AdvancedStagesExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return \App\Models\School\Internship::with('people')->get()->flatten(1)->values();
    }
  
	public function headings(): array
    {
        return [
		'ID PFE',
		'Nom et prénom de l’étudiant',
		'Coordonnées de l’étudiant',
		'Option de l’étudiant',
		'Organisme d’accueil',
		'Intitulé du PFE',
		'Pays',
		'Nom et prénom de l’encadrant externe',
		'Email et tél de l’encadrant externe',
		'Date de déclaration de stage',
		'Encadrant interne 1',
		'Encadrant interne 2',
		'Examinateur 1',
		'Examinateur 2',
		'Examinateur 3',
        ];
    }
	
}
