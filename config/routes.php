<?php

use App\Controller\CursoController;
use App\Controller\HomeController;
use App\Controller\ErrorController;
use App\Controller\TranslateController;
use App\Controller\AlunoController;
use App\Controller\Api\CursoApiController;

return [
    // url a ser acessada => [Controller, metodo]
    '/' => [HomeController::class, 'index'],


    '/erro-404' => [ErrorController::class, 'notFound'],

    '/translate' => [TranslateController::class, 'translate'],

    '/cursos/listar' => [CursoController::class, 'listar'],
    '/cursos/adicionar' => [CursoController::class, 'add'],
    '/cursos/editar' => [CursoController::class, 'editar'],
    '/cursos/excluir' => [CursoController::class, 'excluir'],
    '/alunos/listar' => [AlunoController::class, 'listar'],
    '/api/cursos' => [CursoApiController::class, 'listar'],
];