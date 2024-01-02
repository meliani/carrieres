<?php

use App\Models\Admin\offresStages;
use App\Repositories\Admin\offresStagesRepository;
use Faker\Factory as Faker;

trait MakeoffresStagesTrait
{
    /**
     * Create fake instance of offresStages and save it in database
     *
     * @param  array  $offresStagesFields
     * @return offresStages
     */
    public function makeoffresStages($offresStagesFields = [])
    {
        /** @var offresStagesRepository $offresStagesRepo */
        $offresStagesRepo = App::make(offresStagesRepository::class);
        $theme = $this->fakeoffresStagesData($offresStagesFields);

        return $offresStagesRepo->create($theme);
    }

    /**
     * Get fake instance of offresStages
     *
     * @param  array  $offresStagesFields
     * @return offresStages
     */
    public function fakeoffresStages($offresStagesFields = [])
    {
        return new offresStages($this->fakeoffresStagesData($offresStagesFields));
    }

    /**
     * Get fake data of offresStages
     *
     * @param  array  $postFields
     * @return array
     */
    public function fakeoffresStagesData($offresStagesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nom_responsable' => $fake->word,
            'organization_name' => $fake->word,
            'lieu_de_stage' => $fake->word,
            'fonction' => $fake->word,
            'email' => $fake->word,
            'intitules_sujets' => $fake->text,
            'mots_cles' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word,
        ], $offresStagesFields);
    }
}
