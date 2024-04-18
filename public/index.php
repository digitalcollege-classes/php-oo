<?php

include "../vendor/autoload.php";

session_start();

$routes = new App\Router\Router();

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

$routes->getRoute();