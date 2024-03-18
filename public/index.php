<?php

include "../vendor/autoload.php";

$routes = include "../config/routes.php";

$url = $_SERVER['REQUEST_URI'];

$controllerFound = false;

foreach ($routes as $controller => $actions) {
    if (isset($actions[$url])) {
        $controllerFound = true;
        $method = $actions[$url];
        (new $controller())->$method();
        break;
    }
}

if (!$controllerFound) {
    header('location: /erro-404');
    exit;
}
