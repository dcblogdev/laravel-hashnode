<?php

namespace Dcblogdev\Hashnode\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Dcblogdev\Hashnode\Hashnode
 */
class Hashnode extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hashnode';
    }
}
