<?php

namespace Core;

/**
 * Handles routing from user requested url to appropriate controller
 */
class Router
{
    /**
     * Stores available routes
     * @var array
     */
    public array $routes = [];


    /**
     * injects routes into router
     * @param array $routes
     */
    public function __construct(array $routes) {
        $this->routes = $routes;
   }

    /**
     * handles matching requested url to available routes
     * @param string $url
     * @return false|mixed
     */
    function route(string $url)
   {
    foreach ($this->routes as $route) {
        if ($route['url'] === $url) {
            return require base($route["controller"]);
        }
    }
    abort();
    return false;
   }
}
