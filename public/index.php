<?php

include "../vendor/autoload.php";

$routes = include "../config/routes.php";

$url = $_SERVER['REQUEST_URI'];

if (false === isset($routes[$url])) {
    header('location: /erro-404');
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();