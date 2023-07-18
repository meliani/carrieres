<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class UpdateCorrectCityInInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $internships = DB::table('internships')->select('id', 'ville')->get();

        foreach ($internships as $internship) {
            $correctCity = $this->findCorrectCity($internship->ville);
            DB::table('internships')->where('id', $internship->id)->update(['correct_city' => $correctCity]);
        }
    }

    /**
     * Find the correct city based on fuzzy matching.
     *
     * @param string $city
     * @return string|null
     */
    private function findCorrectCity($city)
    {
        // Replace 'city_names' with your table name and 'city' with the column name containing the correct city names
        $correctCityNames = DB::table('world_cities')->pluck('name')->toArray();
        $bestMatch = $city;
        $highestSimilarity = 0;
        $threshold = 65; // Adjust the similarity threshold here

        foreach ($correctCityNames as $correctCityName) {
            similar_text(strtolower($city), strtolower($correctCityName), $similarity);

            if ($similarity > $highestSimilarity && $similarity >= $threshold) {
                $highestSimilarity = $similarity;
                $bestMatch = $correctCityName;
            }
        }

        return $bestMatch;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revert the changes if needed
        // You can use another migration to revert the updates
    }
}
