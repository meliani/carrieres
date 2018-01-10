<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\applicationRepository;
use App\Entities\Application;
use App\Validators\ApplicationValidator;

/**
 * Class ApplicationRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ApplicationRepositoryEloquent extends BaseRepository implements ApplicationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Application::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
