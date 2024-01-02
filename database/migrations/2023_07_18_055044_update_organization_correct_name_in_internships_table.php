<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class UpdateOrganizationCorrectNameInInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $internships = DB::table('internships')->select('id', 'organization_name')->get();

        foreach ($internships as $internship) {
            $correctName = $this->findCorrectName($internship->organization_name);
            $correctName = implode(
                ' ',
                array_map(
                    function ($word) {
                        return ucfirst($word);
                    },
                    explode(' ', $correctName)
                )
            );
            DB::table('internships')->where('id', $internship->id)->update(['organization_correct_name' => $correctName]);
        }
    }

    /**
     * Find the correct name based on fuzzy matching.
     *
     * @param string $raisonSocial
     * @return string|null
     */
    private function findCorrectName($raisonSocial)
    {
        $correctNames = DB::table('organizations')->pluck('name')->toArray();

        $bestMatch = $raisonSocial;
        $highestSimilarity = 0;
        $threshold = 70; // Adjust the similarity threshold here

        foreach ($correctNames as $correctName) {
            similar_text(strtolower($raisonSocial), strtolower($correctName), $similarity);

            if ($similarity > $highestSimilarity && $similarity >= $threshold) {
                $highestSimilarity = $similarity;
                $bestMatch = $correctName;
            } else {
                //now we try with initials
                $initials = $this->generateInitials($raisonSocial);
                similar_text(strtolower($raisonSocial), strtolower($initials), $similarity);

                if ($similarity > $highestSimilarity && $similarity >= $threshold) {
                    $highestSimilarity = $similarity;
                    $bestMatch = $correctName;
                }
            }
        }
        
        return $bestMatch;
    }
    private function generateInitials($name)
    {
        $words = explode(' ', $name);
        $initials = '';

        foreach ($words as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }

        return $initials;
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
