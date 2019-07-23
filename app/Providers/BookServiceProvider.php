<?php

namespace App\Providers;

use App\BookReader;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            BookReader::class,
        ];
    }
}
