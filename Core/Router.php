<?php

namespace Core;

class Router
{
    public array $routes = [];


    public function __construct(array $routes) {
        $this->routes = $routes;
   }

   function route(string $url)
   {
    foreach ($this->routes as $route) {
        if ($route['url'] === $url) {
            return require base($route["controller"]);
        }
    }

    return require base("controllers/404.php");
   }


}
