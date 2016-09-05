<?php

namespace Lucid\Foundation\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;

abstract class RouteServiceProvider extends BaseServiceProvider
{
    /**
     * Read the routes from the "routes.php" file of this Service
     *
     * @param \Illuminate\Routing\Router $router
     */
    abstract public function map(Router $router);

    public function loadRoutesFile($router, $namespace, $path)
    {
        $router->group(['namespace' => $namespace], function ($router) use ($path) {
            if (file_exists($path)) {
                require $path;
            }
        });
    }
}
