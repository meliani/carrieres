<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Internships;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InternshipsRepository
 * @package App\Repositories\Admin
 * @version November 30, 2018, 5:37 pm UTC
 *
 * @method Internships findWithoutFail($id, $columns = ['*'])
 * @method Internships find($id, $columns = ['*'])
 * @method Internships first($columns = ['*'])
*/
class InternshipsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'raison_sociale',
        'adresse',
        'ville',
        'pays',
        'parrain_titre',
        'parrain_nom',
        'parrain_prenom',
        'parrain_fonction',
        'parrain_tel',
        'parrain_mail',
        'encadrant_ext_titre',
        'encadrant_ext_nom',
        'encadrant_ext_prenom',
        'encadrant_ext_fonction',
        'encadrant_ext_tel',
        'encadrant_ext_mail',
        'encadrant_int_titre',
        'encadrant_int_nom',
        'encadrant_int_prenom',
        'encadrant_int_mail',
        'co_encadrant_int_titre',
        'co_encadrant_int_nom',
        'co_encadrant_int_prenom',
        'co_encadrant_int_mail',
        'intitule',
        'descriptif',
        'keywords',
        'date_debut',
        'date_fin',
        'foreign',
        'remuneration',
        'charge',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Internships::class;
    }
}
