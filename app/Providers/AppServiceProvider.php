<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Services\SolaxService::class,
            function ($app) {
                return new \App\Services\SolaxService(env('ONDULEUR_IP'));
            }
        );
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->app->singleton(\App\Services\WeatherService::class, function ($app) {
            return new \App\Services\WeatherService(env('ONDULEUR_LAT'), env('ONDULEUR_LONG'));
        });
    }
}
