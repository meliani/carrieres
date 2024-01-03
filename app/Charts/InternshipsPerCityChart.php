<?php

namespace App\Charts;

use Carbon\Carbon;
use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsPerCityChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {

        //get the total count of registred internships per program using student relationship grouping by internships.city
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, internships.city')
            ->join('people', 'internships.student_id', '=', 'people.id')
            // ->where('internships.created_at', '>', Carbon::now()->subYear())
            // ->Where('people.model_status_id', '=', '1')
            ->groupBy('internships.city')
            //order by count desc and limit to 10
            ->orderBy('count', 'desc')
            // ->limit(10)
            ->get();
        //make pie chart with data from internships with a title and different colors for each slice
        $chart = (new Chart)
            ->labels($internships->pluck('city')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
        $chart->dataset('Internships', 'pie', $internships->pluck('count')->toArray())
            ->backgroundColor(['#848584', '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF', '#FF00FF', '#C0C0C0', '#808080', '#800000', '#808000', '#008000', '#800080', '#008080', '#000080', '#FFA500', '#FFC0CB', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008
080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB', '#C0C0C0', '#808080', '#800080', '#FF00FF', '#800000', '#FF0000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FFA500', '#FFC0CB'])
            ->color('#ffffff');

        return $chart;
    }
}
