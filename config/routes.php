<?php

use App\Controller\CursoController;
use App\Controller\HomeController;
use App\Controller\ErrorController;
use App\Controller\AlunoController; 
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
        'cursos' => [
            '/listar' => 'listar',
            '/adicionar' => 'add',
            '/editar' => 'editar',
            '/excluir' => 'excluir',
            '/alunos' => 'alunos',
        ]   
    ],

    // Rotas do AlunoController
    AlunoController::class => [
        'aluno' => [
            '/matricula' => 'matricula',
            '/nome' => 'nome',
            '/curso' => 'curso',
            '/turno' => 'turno',
            '/notas' => 'notas',
        ]
    ],
];

?>
