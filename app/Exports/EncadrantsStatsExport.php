<?php

namespace App\Exports;

use App\Models\Encadrement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EncadrantsStatsExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Encadrement::all();
    }
  
	public function headings(): array
    {
        return [
		'ID PFE',
		'Encadrant interne 1',
		'Encadrant interne 2',
		'Examinateur 1',
		'Examinateur 2',
		'Examinateur 3',
        ];
    }
	
}
