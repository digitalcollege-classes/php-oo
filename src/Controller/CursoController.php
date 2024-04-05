<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Curso;
use App\Validator\CursoValidator;
use PDO;

final class CursoController extends AbstractController
{
    public CursoValidator $validator;

    public function __construct()
    {
        $this->validator = new CursoValidator();
    }

    public function listar(): void
    {
        $entityManager = require_once dirname(__DIR__, 2).'/bootstrap.php';

        $repository = $entityManager->getRepository(Curso::class);

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

        $entityManager = require_once dirname(__DIR__, 2).'/bootstrap.php';

        //INSERT INTO
        $entityManager->persist($curso);
        $entityManager->flush();

        header('location: /cursos/listar');
    }

    public function editar(): void
    {
        echo "Editar";
    }

    public function excluir(): void
    {
        echo "Excluir";
    }
}