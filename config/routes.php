<?php

use App\Controller\CursoController;
use App\Controller\HomeController;
use App\Controller\ErrorController;

$cursoController = CursoController::class;

$prefix = '/cursos';

$cursoRoutes = [
    'listar',
    'adicionar',
    'editar',
    'excluir'
];

$cursosRoutes = [];

foreach ($cursoRoutes as $method) {
    $cursosRoutes[$prefix . '/' . $method] = [$cursoController, $method];
}

$routes = [
    '/' => [HomeController::class, 'index'],
    '/erro-404' => [ErrorController::class, 'notFound'],
];

$NewRoutes = array_merge($routes, $cursosRoutes);

return $NewRoutes;