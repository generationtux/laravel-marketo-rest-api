<?php

namespace GenTux\Artisan\Marketo;

use Illuminate\Support\Facades\Facade;

class MarketoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'marketo';
    }
}