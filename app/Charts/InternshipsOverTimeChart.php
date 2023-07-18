<?php

namespace App\Charts;

use Carbon\Carbon;
use Fidum\ChartTile\Charts\Chart;
use Fidum\ChartTile\Contracts\ChartFactory;

class InternshipsOverTimeChart implements ChartFactory
{
    public static function make(array $settings): ChartFactory
    {
        return new static;
    }

    public function chart(): Chart
    {

        //get the number of internships per month
        $internships = \App\Models\School\Internship\Internship::selectRaw('count(*) as count, MONTH(created_at) month')
            ->where('created_at', '>', Carbon::now()->subYear())
            ->groupBy('month')
            ->orderBy('month')
            ->get();
            //make chart with data from internships
        $chart = (new Chart)
            ->labels($internships->pluck('month')->toArray())
            ->options([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], true);
        $chart->dataset('Internships', 'bar', $internships->pluck('count')->toArray())
            ->backgroundColor('#848584');

/*         $date = Carbon::now()->subMonth()->startOfDay();

        $data = collect(range(0, 12))->map(function ($days) use ($date) {
            return [
                'x' => $date->clone()->addDays($days)->toDateString(),
                'y' => rand(100, 500),
            ];
        });

        $chart = (new Chart)
            ->labels($data->pluck('x')->toArray())
            ->options([
                  'responsive' => true,
                  'maintainAspectRatio' => false,
             ], true);

        $chart->dataset('Example Data', 'bar', $data->toArray())
            ->backgroundColor('#848584');
 */
        return $chart;
    }
}