<?php

namespace App\Providers;
use App\Penerbit;
use Illuminate\Support\ServiceProvider;

class PenerbitProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.s
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('Penerbit_array', Penerbit::all());
        });
    }
}
