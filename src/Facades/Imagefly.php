<?php

namespace Ivliev\Imagefly\Facades;

use Illuminate\Support\Facades\Facade;

class Imagefly extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Imagefly';
    }
}