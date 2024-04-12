<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Aluno;


final class AlunoController extends AbstractController
{
    public mixed $entityManager;

    public function __construct()
    {
        $this->entityManager = parent::entityManager();
    }

    public function listar(): void
    {

        $repository = $this->entityManager->getRepository(Aluno::class);

        parent::render('alunos/listar', [
            'alunos' => $repository->findAll(),
        ]);
    }
    
    public function excluir(): void
    {
        $id = $_GET['id'];
        $aluno = $this->entityManager->find(Aluno::class, $id);

        if($aluno !== null) {
            $this->entityManager->remove($aluno);
            $this->entityManager->flush();
        }

        header('location: /alunos/listar');
    }
}