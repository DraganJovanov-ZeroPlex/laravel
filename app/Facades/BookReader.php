<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class BookReader extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'bookreader';
    }

}