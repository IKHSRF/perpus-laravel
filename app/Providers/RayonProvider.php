<?php

namespace App\Providers;
use App\Rayon;
use Illuminate\Support\ServiceProvider;

class RayonProvider extends ServiceProvider
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
            $view->with('Rayon_array', Rayon::all());
        });
    }
}
