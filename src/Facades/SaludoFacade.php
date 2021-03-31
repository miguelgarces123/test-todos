<?php

namespace MiguelGarces\Unicornio\Facades;

use Illuminate\Support\Facades\Facade;

class SaludoFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { 
        return 'SaludoWilder'; 
    }


}