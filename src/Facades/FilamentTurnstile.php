<?php

namespace Alexb34n\FilamentTurnstile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alexb34n\FilamentTurnstile\FilamentTurnstile
 */
class FilamentTurnstile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alexb34n\FilamentTurnstile\FilamentTurnstile::class;
    }
}
