<?php

use App\Models\Admin\offresDeStages;
use App\Repositories\Admin\offresDeStagesRepository;
use Faker\Factory as Faker;

trait MakeoffresDeStagesTrait
{
    /**
     * Create fake instance of offresDeStages and save it in database
     *
     * @param  array  $offresDeStagesFields
     * @return offresDeStages
     */
    public function makeoffresDeStages($offresDeStagesFields = [])
    {
        /** @var offresDeStagesRepository $offresDeStagesRepo */
        $offresDeStagesRepo = App::make(offresDeStagesRepository::class);
        $theme = $this->fakeoffresDeStagesData($offresDeStagesFields);

        return $offresDeStagesRepo->create($theme);
    }

    /**
     * Get fake instance of offresDeStages
     *
     * @param  array  $offresDeStagesFields
     * @return offresDeStages
     */
    public function fakeoffresDeStages($offresDeStagesFields = [])
    {
        return new offresDeStages($this->fakeoffresDeStagesData($offresDeStagesFields));
    }

    /**
     * Get fake data of offresDeStages
     *
     * @param  array  $postFields
     * @return array
     */
    public function fakeoffresDeStagesData($offresDeStagesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nom_responsable' => $fake->word,
            'organization_name' => $fake->word,
            'lieu_de_stage' => $fake->word,
            'fonction' => $fake->word,
            'telephone' => $fake->word,
            'email' => $fake->word,
            'intitule_sujet' => $fake->text,
            'descriptif' => $fake->text,
            'mots_cles' => $fake->word,
            'document_offre' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word,
        ], $offresDeStagesFields);
    }
}
