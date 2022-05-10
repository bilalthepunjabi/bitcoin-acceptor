<?php

namespace Bilalthepunjabi\Bitcoin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bilalthepunjabi\Bitcoin\Skeleton\SkeletonClass
 */
class BitcoinFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bitcoin';
    }
}
