<?php

namespace App\Charts;

use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsPerStreamChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {

        //get the total count of registred internships grouped by filiere_text on the same table
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, people.filiere_text')
            ->join('people', 'internships.student_id', '=', 'people.id')
            // ->where('internships.created_at', '>', Carbon::now()->subYear())
            ->Where('people.model_status_id', '=', '1')
            ->groupBy('people.filiere_text')
            //order by count desc and limit to 10
            ->orderBy('count', 'desc')
            // ->limit(10)
            ->get();


        //make chart with data from internships
        // chart's title
        $chart = (new Chart)
            ->title('Stages par filière')
            ->labels($internships->pluck('filiere_text')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
            // display space chart with color for each space
        $chart->dataset('Internships', 'bar', $internships->pluck('count')->toArray())
        // colors: blue sky, orange, purple and their shades and derives in a cold tone
            ->backgroundColor(['#848584', '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF', '#FF00FF', '#C0C0C0', '#808080', '#800000', '#808000', '#008000', '#800080', '#008080', '#000080', '#FFA500', '#FFC0CB', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB'])
            ->color('#ffffff');     
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
