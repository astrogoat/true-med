<?php

namespace Astrogoat\TrueMed;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\TrueMed\TrueMed
 */
class TrueMedFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'true-med';
    }
}
