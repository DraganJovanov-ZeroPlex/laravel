<?php

namespace App\Providers;

use App\Http\Controllers\BooksController;
use App\LoggedUser;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(BooksController::class)
            ->needs(LoggedUser::class)
            ->give(function(){
                return 'test';
            });

        $this->app->singleton('bookreader', function(){
            return new BookReader();
        });

    }
}
