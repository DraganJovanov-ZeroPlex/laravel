<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Closure;

class CheckValidity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $validity = null)
    {
        $validity = $validity ?: \Route::current()->controller->validity;

        if (Carbon::parse($validity)->isPast()) {
            dd('This promo offer has expired! Returning home...');
        }

        return $next($request);
    }
}
