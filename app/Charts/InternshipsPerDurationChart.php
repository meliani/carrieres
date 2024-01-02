<?php

namespace App\Charts;

use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsPerDurationChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {

        // internships grouped by duration, round to 4 months OR 6 months and if duration is more that 6 month or less than 4 months mention it as warning
        // duration is calculable from starting_at and ending_at
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, ROUND(DATEDIFF(ending_at, starting_at)/30) as duration')
            ->groupBy('duration')
            ->orderBy('duration')
            ->get();
        // Display chart data from internships
        // chart's title
        $chart = (new Chart)
            ->title('Stages par durée')
            ->labels($internships->pluck('duration')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
        // display space chart with color for each space
        $chart->dataset('Internships', 'bar', $internships->pluck('count')->toArray())
            ->backgroundColor('#848584');

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
