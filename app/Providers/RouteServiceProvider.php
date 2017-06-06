<?php

namespace ArcFramework\Providers;

use Arc\Routing\Router;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->group([
            'namespace' => 'ArcFramework\Http\Controllers',
        ], function () use ($router) {

            // Load browser routes
            include $this->app->basePath().'/routes/web.php';

            // Load API routes
            include $this->app->basePath().'/routes/api.php';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
