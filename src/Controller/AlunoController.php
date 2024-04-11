<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Aluno;


final class AlunoController extends AbstractController
{

    public function listar(): void
    {
        $entityManager = require_once dirname(__DIR__, 2).'/bootstrap.php';

        $repository = $entityManager->getRepository(Aluno::class);

        parent::render('alunos/listar', [
            'alunos' => $repository->findAll(),
        ]);
    }
}