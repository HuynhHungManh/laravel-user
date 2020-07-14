<?php

namespace hunghbm\userpackage;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'UserView');

        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/UserView'),
        ]);

        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
