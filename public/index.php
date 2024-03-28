<?php

include "../vendor/autoload.php";

$routes = include "../config/routes.php";

// ----------------------------------------------------------
//TODO: Mover essa configuracao pra outro lugar
$lang = 'en';

$translations = include "../translations/{$lang}.php";

function translate(string $key): string
{
    //TODO: Refatorar, pq globalizar uma variavel é errado
    global $translations;

    return $translations[$key] ?? $key;
}
// -----------------------------------------------------------

$url = $_SERVER['REQUEST_URI'];

if (false === isset($routes[$url])) {
    header('location: /erro-404');
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();