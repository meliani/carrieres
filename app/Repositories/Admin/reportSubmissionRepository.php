<?php

namespace App\Repositories\Admin;

use App\Models\Admin\reportSubmission;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class reportSubmissionRepository
 * @package App\Repositories\Admin
 * @version September 24, 2018, 2:17 pm UTC
 *
 * @method reportSubmission findWithoutFail($id, $columns = ['*'])
 * @method reportSubmission find($id, $columns = ['*'])
 * @method reportSubmission first($columns = ['*'])
*/
class reportSubmissionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'prenom',
        'email',
        'email_autre',
        'titre_rapport',
        'entreprise',
        'ville',
        'nom_responsable_stage',
        'email_responsable',
        'doc_rapport',
        'doc_fiche_evaluation',
        'doc_convention',
        'doc_attestation'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return reportSubmission::class;
    }
}
