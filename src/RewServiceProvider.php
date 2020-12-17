<?php

namespace edgewizz\rew;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Rew\Controllers\RewController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'rew');
        Blade::component('rew::rew.open', 'rew.open');
        Blade::component('rew::rew.index', 'rew.index');
    }
}
