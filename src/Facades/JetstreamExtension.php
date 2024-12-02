<?php

namespace Thereline\JetstreamExtension\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thereline\JetstreamExtension\JetstreamExtension
 */
class JetstreamExtension extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Thereline\JetstreamExtension\JetstreamExtension::class;
    }
}
