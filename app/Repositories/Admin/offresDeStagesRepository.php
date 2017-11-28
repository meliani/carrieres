<?php

namespace App\Repositories\Admin;

use App\Models\Admin\offresDeStages;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class offresDeStagesRepository
 * @package App\Repositories\Admin
 * @version November 16, 2017, 12:58 am UTC
 *
 * @method offresDeStages findWithoutFail($id, $columns = ['*'])
 * @method offresDeStages find($id, $columns = ['*'])
 * @method offresDeStages first($columns = ['*'])
*/
class offresDeStagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_responsable',
        'raison_sociale',
        'lieu_de_stage',
        'fonction',
        'telephone',
        'email',
        'intitule_sujet',
        'descriptif',
        'mots_cles',
        'document_offre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return offresDeStages::class;
    }
}
