<?php

namespace App\Exports;

use App\Models\OffersApplications;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class OffersApplicationsExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OffersApplications::all();
    }
  
	public function headings(): array
    {
        return [
			'Raison sociale',
			'Intitulé du sujet',
			'Descriptif',
			'nom responsable',
			'Fonction',
			'Email responsable',
			'Mots clés',
			'Nom étudiant',
			'Option',
			'Email Etudiant',
			'Téléphone',
			'CV',
			'lettre de motivation',
			'Date de soumission',
        ];
    }
	
}
