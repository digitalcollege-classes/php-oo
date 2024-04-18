<?php

declare(strict_types=1);

namespace App\Router;

class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = include "../config/routes.php";
    }

    public function getRoute() {
        $url = explode('?', $_SERVER['REQUEST_URI'])[0];

        if (false === isset($this->routes[$url])) {
            header('location: /erro-404');
            return;
        }

        list($controller, $method) = $this->routes[$url];

        return (new $controller())->$method();
    }
}