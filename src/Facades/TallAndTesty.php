<?php

namespace jjrohrer\TallAndTesty\Facades;

use Illuminate\Support\Facades\Facade;

class TallAndTesty extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tallandtesty';
    }
}
