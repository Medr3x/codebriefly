<?php

namespace codebriefly\codrpack\Facades;

use Illuminate\Support\Facades\Facade;

class codrpack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'codrpack';
    }
}
