<?php

use App\Models\Admin\reportSubmission;
use App\Repositories\Admin\reportSubmissionRepository;
use Faker\Factory as Faker;

trait MakereportSubmissionTrait
{
    /**
     * Create fake instance of reportSubmission and save it in database
     *
     * @param  array  $reportSubmissionFields
     * @return reportSubmission
     */
    public function makereportSubmission($reportSubmissionFields = [])
    {
        /** @var reportSubmissionRepository $reportSubmissionRepo */
        $reportSubmissionRepo = App::make(reportSubmissionRepository::class);
        $theme = $this->fakereportSubmissionData($reportSubmissionFields);

        return $reportSubmissionRepo->create($theme);
    }

    /**
     * Get fake instance of reportSubmission
     *
     * @param  array  $reportSubmissionFields
     * @return reportSubmission
     */
    public function fakereportSubmission($reportSubmissionFields = [])
    {
        return new reportSubmission($this->fakereportSubmissionData($reportSubmissionFields));
    }

    /**
     * Get fake data of reportSubmission
     *
     * @param  array  $postFields
     * @return array
     */
    public function fakereportSubmissionData($reportSubmissionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nom' => $fake->word,
            'prenom' => $fake->word,
            'email' => $fake->word,
            'email_autre' => $fake->word,
            'titre_rapport' => $fake->text,
            'entreprise' => $fake->word,
            'city' => $fake->word,
            'nom_responsable_stage' => $fake->word,
            'email_responsable' => $fake->word,
            'doc_rapport' => $fake->text,
            'doc_fiche_evaluation' => $fake->text,
            'doc_convention' => $fake->text,
            'doc_attestation' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word,
        ], $reportSubmissionFields);
    }
}
