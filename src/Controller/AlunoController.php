<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Aluno;


final class AlunoController extends AbstractController
{

    public function listar(): void
    {
        $entityManager = parent::entityManager();

        $repository = $entityManager->getRepository(Aluno::class);

        parent::render('alunos/listar', [
            'alunos' => $repository->findAll(),
        ]);
    }
}