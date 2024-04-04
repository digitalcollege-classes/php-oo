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
        $conexao = new PDO(
            'mysql:host=setup-mysql;dbname=db_name',
            'user',
            'password'
        );

        $sql = "SELECT * FROM course";

        $cursos = $conexao->query($sql);

        $cursos = $cursos->fetchAll(PDO::FETCH_OBJ);

        parent::render('curso/listar', [
            'cursos' => $cursos,
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

        echo "Ok, inserindo";
        var_dump($errors);
        //rule
        //sql
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