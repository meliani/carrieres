<?php

namespace App\Tracker;

use PragmaRX\Tracker\Vendor\Laravel\Models\Session as TrackerSession;

class Session extends TrackerSession{

    /*
     * The PragmaRX\Tracker seems to have an undefined index bug with L5.7.
     * Applying this quick fix : https://github.com/antonioribeiro/tracker/issues/402
     */
    public function __construct(array $attributes = [])
    {
        static::$traitInitializers['App\Tracker\Session'] = ['placeholder'];
        parent::__construct($attributes);
    }

    protected function placeholder(){
        // Satisfy the initializer above
    }
}