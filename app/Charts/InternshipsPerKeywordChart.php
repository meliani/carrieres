<?php

namespace App\Charts;

use App\Models\School\Internship\Internship; // Import the Internship model
use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsPerKeywordChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {
        $keywords = Internship::all()->pluck('keywords')->toArray();

        $keywords = array_map('trim', $keywords);
        $keywords = array_map('strtolower', $keywords);
        // explode $keywords by comma
        $keywords = array_map(function ($keywords) {
            return explode(',', $keywords);
        }, $keywords);
        //  flatten the collection
        $keywords = array_merge(...$keywords);
        //  remove special caracters also /r /n /t
        $keywords = array_map('trim', $keywords);
        // remove empty values
        $keywords = array_filter($keywords);
        // dd($keywords);

        // count the number of occurences of each keyword
        $keywords = array_count_values($keywords);
        // display chart data from keywords array and their number of occurences
        // we can make a tag cloud with the keywords
        // the contentent should be compatible with spatie dashboard laravel package
        $chart = (new Chart)
            ->title('Stages par mot clé')
            ->labels(array_keys($keywords))
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
            // display space chart with color for each space
        $chart->dataset('Internships', 'bar', array_values($keywords))
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
