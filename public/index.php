<?php

include "../vendor/autoload.php";
use App\Controller\Translator;

session_start();

$routes = include "../config/routes.php";
$translator = Translator::getInstance();

// Função para traduzir chaves de idioma
function translate(string $key)
{
    return Translator::getInstance()->translate($key);
}

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if (false === isset($routes[$url])) {
    header('location: /erro-404');
    exit;
}

$controller = $routes[$url][0];
$method = $routes[$url][1];

(new $controller())->$method();
