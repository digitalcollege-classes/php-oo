<?php

require_once "../vendor/autoload.php";

use App\Controller\CursoController;

$routes = include "../config/routes.php";

$url = $_SERVER['REQUEST_URI'];

$controllerFound = false;

foreach ($routes as $controller => $actions) {
    if ($controller === CursoController::class && isset($actions['cursos'])) {
        $prefixo = '/cursos';
        $rota = substr($url, strlen($prefixo));

        if (isset($actions['cursos'][$rota])) {
            $controllerFound = true;
            $method = $actions['cursos'][$rota];
            (new CursoController())->$method();
            break;
        }
    } elseif (isset($actions[$url])) {
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