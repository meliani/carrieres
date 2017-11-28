<?php

use Faker\Factory as Faker;
use App\Models\Admin\Postuler;
use App\Repositories\Admin\PostulerRepository;

trait MakePostulerTrait
{
    /**
     * Create fake instance of Postuler and save it in database
     *
     * @param array $postulerFields
     * @return Postuler
     */
    public function makePostuler($postulerFields = [])
    {
        /** @var PostulerRepository $postulerRepo */
        $postulerRepo = App::make(PostulerRepository::class);
        $theme = $this->fakePostulerData($postulerFields);
        return $postulerRepo->create($theme);
    }

    /**
     * Get fake instance of Postuler
     *
     * @param array $postulerFields
     * @return Postuler
     */
    public function fakePostuler($postulerFields = [])
    {
        return new Postuler($this->fakePostulerData($postulerFields));
    }

    /**
     * Get fake data of Postuler
     *
     * @param array $postFields
     * @return array
     */
    public function fakePostulerData($postulerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'offre_id' => $fake->randomDigitNotNull,
            'user_id' => $fake->randomDigitNotNull,
            'cv' => $fake->word
        ], $postulerFields);
    }
}
