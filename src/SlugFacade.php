<?php

namespace Rayhan\Slug;

use Illuminate\Support\Facades\Facade;

class SlugFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SlugGenerator::class;
    }
}
