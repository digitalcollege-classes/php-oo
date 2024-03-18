<?php

use App\Controller\CursoController;
use App\Controller\HomeController;
use App\Controller\ErrorController;
use App\Entity\Curso;

return [
    // Rotas do HomeController
    HomeController::class => [
        '/' => 'index',
    ],

    // Rotas do ErrorController
    ErrorController::class => [
        '/erro-404' => 'notFound',
    ],

    // Rotas do CursoController
    CursoController::class => [
        '/cursos/listar' => 'listar',
        '/cursos/adicionar' => 'add',
        '/cursos/editar' => 'editar',
        '/cursos/excluir' => 'excluir',
        '/cursos/alunos' => 'alunos',
    ],
];
