<?php

namespace App\Charts;

use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsTotalsChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {

        //get the total count of registred internships per program using student relationship
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, level')
            ->join('people', 'internships.student_id', '=', 'people.id')
            // ->Where('people.model_status_id', '=', '1')
            ->groupBy('level')
            ->orderBy('level')
            ->get();
        //make chart with data from internships
        $chart = (new Chart)
            ->labels($internships->pluck('level')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
        $chart->dataset('Internships', 'bar', $internships->pluck('count')->toArray())
            ->backgroundColor('#848584');

        return $chart;
    }
}
