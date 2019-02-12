<?php

namespace Subbe\Gazetteer;

use Illuminate\Support\ServiceProvider;
use Subbe\Gazetteer\Facades;

class GazetteerServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/database/migrations/' => $this->app->databasePath() . '/migrations' 
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/database/seeds/' => $this->app->databasePath() . '/seeds'
        ], 'seeds');

        require __DIR__ . '/Http/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind('gazetteer', function($app) {
            return new Gazetteer;
        });
        
    }
}
