<?php

namespace App\Charts;

use Carbon\Carbon;
use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsPerOrganizationChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {

        //get the total count of registred internships grouped by raison_sociale on the same table
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, raison_sociale')
            ->groupBy('raison_sociale')
            ->orderBy('raison_sociale')
            // ->limit(10)
            ->get();



        //make chart with data from internships
        // chart's title
        $chart = (new Chart)
            ->title('Stages PFE Par Entreprise')
            ->labels($internships->pluck('raison_sociale')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
            // display space chart with color for each space
        $chart->dataset('Internships', 'bar', $internships->pluck('count')->toArray())
            ->backgroundColor('#848584');
            // display axe decimal to integer
            $chart->options([
                'scales' => [
                    'yAxes' => [
                        [
                            'ticks' => [
                                'beginAtZero' => true,
                                'stepSize' => 1,
                            ],
                        ],
                    ],
                ],
            ]);

        return $chart;
    }
}
