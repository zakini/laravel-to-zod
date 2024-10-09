<?php

namespace Zakini\LaravelToZod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zakini\LaravelToZod\LaravelToZod
 */
class LaravelToZod extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Zakini\LaravelToZod\LaravelToZod::class;
    }
}
