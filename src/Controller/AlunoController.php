<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Aluno;
use App\Validator\AlunoValidator;
use Doctrine\ORM\EntityManager;


final class AlunoController extends AbstractController
{
    private AlunoValidator $validator;
    private EntityManager $entityManager;

    public function __construct()
    {
        $this->validator = new AlunoValidator();
        $this->entityManager = parent::entityManager();
    }

    public function listar(): void
    {
        $entityManager = parent::entityManager();

        $repository = $entityManager->getRepository(Aluno::class);

        parent::render('alunos/listar', [
            'alunos' => $repository->findAll(),
        ]);
    }

    public function add(): void
    {
        if (true === empty($_POST)) {
            parent::render('alunos/add');
            return;
        }

        $errors = $this->validator->validateRequest();

        if (false === empty($errors)) {
            $_SESSION['errors'] = $errors;

            parent::render('alunos/add');
            return;
        }

        $aluno = new Aluno();
        $aluno->name = $_POST['name'];
        $aluno->registry = $_POST['registry'];
        $aluno->cpf = $_POST['cpf'];
        $aluno->email = $_POST['email'];
        $aluno->created_at = new \DateTime('now');

        $this->entityManager->persist($aluno);
        $this->entityManager->flush();

        parent::redirect("/alunos/listar");
    }

    public function editar(): void
    {
        $id = $_GET['id'];
        $aluno = $this->entityManager->find(Aluno::class, $id);

        if ($aluno === null) {
            $_SESSION['errors'] = ['Aluno não encontrado'];

            parent::redirect('/alunos/adicionar');
            return;
        }

        if (true === empty($_POST)) {
            parent::render('alunos/editar', [
                'aluno' => $aluno,
            ]);
            return;
        }

        $aluno->name = $_POST['name'];
        $aluno->registry = $_POST['registry'];
        $aluno->cpf = $_POST['cpf'];
        $aluno->email = $_POST['email'];

        $this->entityManager->persist($aluno);
        $this->entityManager->flush();

        parent::redirect('/alunos/listar');
    }

    public function excluir(): void
    {
        $id = $_GET['id'];
        $aluno = $this->entityManager->find(Aluno::class, $id);

        if ($aluno !== null) {
            $this->entityManager->remove($aluno);
            $this->entityManager->flush();
        }

        parent::redirect("/alunos/listar");
    }
}