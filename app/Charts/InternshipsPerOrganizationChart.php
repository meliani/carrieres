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
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, organization_correct_name')
            ->groupBy('organization_correct_name')
            ->orderBy('organization_correct_name')
            ->limit(10)
            ->get();



        //make chart with data from internships
        // chart's title
        $chart = (new Chart)
            ->title('Top 10 des entreprises ayant le plus d\'offres de stage')
            ->labels($internships->pluck('organization_correct_name')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
            // display space chart with color for each space
        $chart->dataset('Internships', 'bar', $internships->pluck('count')->toArray())
            ->backgroundColor('#848584');
            

        return $chart;
    }
}
