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

    public function editar(): void
    {
        if (true === empty($_POST)) {
            parent::render('alunos/editar');
            return;
        }

        $repository = $this->entityManager->getRepository(Aluno::class);
        $aluno = $repository->findOneBy(['registry' => $_POST['registry']]);

        $aluno->name = $_POST['name'];
        $aluno->cpf = $_POST['cpf'];
        $aluno->email = $_POST['email'];
        $aluno->created_at = new \DateTime($_POST['created_at']);

        //INSERT INTO
        $this->entityManager->persist($aluno);
        $this->entityManager->flush();

        parent::render('alunos/listar', [
            'alunos' => $repository->findAll(),
        ]);
    }
}