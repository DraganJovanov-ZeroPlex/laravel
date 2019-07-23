<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckValidity;
use Illuminate\Http\Request;

class Promo2Controller extends Controller
{
    public $validity = '2019-12-31';

    public function __construct()
    {
        $this->middleware('validity:' . $this->validity);
    }

    public function __invoke() {
        dd("promo2");
    }
}
