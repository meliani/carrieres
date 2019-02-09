<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Postuler;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostulerRepository
 * @package App\Repositories\Admin
 * @version November 24, 2017, 1:01 am UTC
 *
 * @method Postuler findWithoutFail($id, $columns = ['*'])
 * @method Postuler find($id, $columns = ['*'])
 * @method Postuler first($columns = ['*'])
*/
class PostulerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'offre_id',
        'user_id',
        'cv'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Postuler::class;
    }
}
