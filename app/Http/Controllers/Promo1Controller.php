<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckValidity;
use Illuminate\Http\Request;

class Promo1Controller extends Controller
{
    public $validity = '2018-12-31';

    public function __construct()
    {
        $this->middleware(CheckValidity::class);
    }

    public function __invoke() {
        dd("promo1");
    }

}
