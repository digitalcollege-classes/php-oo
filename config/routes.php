<?php

use App\Controller\CursoController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\ErrorController;
use App\Controller\TranslateController;
use App\Controller\AlunoController;

return [
    // url a ser acessada => [Controller, metodo]
    '/' => [HomeController::class, 'index'],
    '/login' => [LoginController::class, 'index'],


    '/erro-404' => [ErrorController::class, 'notFound'],

    '/translate' => [TranslateController::class, 'translate'],

    '/cursos/listar' => [CursoController::class, 'listar'],
    '/cursos/adicionar' => [CursoController::class, 'add'],
    '/cursos/editar' => [CursoController::class, 'editar'],
    '/cursos/excluir' => [CursoController::class, 'excluir'],
    '/alunos/listar' => [AlunoController::class, 'listar'],
];