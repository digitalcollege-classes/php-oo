<?php

include "../vendor/autoload.php";

session_start();

$routes = include "../config/routes.php";

// ----------------------------------------------------------
//TODO: Mover essa configuracao pra outro lugar
$lang = $_SESSION['language'] ?? 'pt-br';

$translations = include "../translations/{$lang}.php";

function translate(string $key): string
{
    //TODO: Refatorar, pq globalizar uma variavel é errado
    global $translations;

    return $translations[$key] ?? $key;
}
// -----------------------------------------------------------

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if (false === isset($routes[$url])) {
    header('location: /erro-404');
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();