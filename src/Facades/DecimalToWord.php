<?php

namespace Ashik\DecimalToWord\Facades;

use Illuminate\Support\Facades\Facade;

class DecimalToWord extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'decimal-to-word';
    }
}
