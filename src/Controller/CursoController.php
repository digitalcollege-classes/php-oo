<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Curso;
use App\Validator\CursoValidator;

final class CursoController extends AbstractController
{
    public CursoValidator $validator;
    public mixed $entityManager;

    public function __construct()
    {
        $this->validator = new CursoValidator();
        $this->entityManager = parent::entityManager();
    }

    public function listar(): void
    {

        $repository = $this->entityManager->getRepository(Curso::class);

        parent::render('curso/listar', [
            'cursos' => $repository->findAll(),
        ]);
    }

    public function add(): void
    {
        if (true === empty($_POST)) {
            parent::render('curso/add');
            return;
        }

        $errors = $this->validator->validateRequest();

        if (false === empty($errors)) {
            $_SESSION['errors'] = $errors;

            parent::render('curso/add');
            return;
        }

        $curso = new Curso();
        $curso->name = $_POST['name'];
        $curso->description = $_POST['description'];
        $curso->status = (bool) $_POST['status'];


        //INSERT INTO
        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        parent::redirect("/cursos/listar");
    }

    public function editar(): void
    {

        $id = $_GET['id'];

        if (true === empty($_POST)) {
            $curso = $this->entityManager->find(Curso::class, $id);
            parent::render('curso/editar', [
                'curso' => $curso,
            ]);
            return;
        }

        $curso = $this->entityManager->find(Curso::class, $id);
        $curso->name = $_POST['name'];
        $curso->description = $_POST['description'];

        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        parent::redirect('/cursos/listar');
    }

    public function excluir(): void
    {
        $id = $_GET['id'];
        $curso = $this->entityManager->find(Curso::class, $id);

        if ($curso !== null) {
            $this->entityManager->remove($curso);
            $this->entityManager->flush();
        }

        parent::redirect("/cursos/listar");
    }
}
