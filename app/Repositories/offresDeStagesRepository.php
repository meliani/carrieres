<?php

namespace App\Repositories;

use App\Models\offreDeStage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class offresDeStagesRepository
 * @package App\Repositories\Admin
 * @version November 14, 2017, 11:11 am UTC
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
        'intitules_sujets',
        'mots_cles',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return offreDeStage::class;
    }
}
