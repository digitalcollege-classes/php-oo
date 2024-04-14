<?php

declare(strict_types=1);

namespace App\Validator;

class AlunoValidator implements Validator
{
    public function validateRequest(): array
    {
        $errors = [];

        $_POST['name'] = strip_tags($_POST['name']);
        $_POST['registry'] = strip_tags($_POST['registry']);
        $_POST['cpf'] = strip_tags($_POST['cpf']);
        $_POST['email'] = strip_tags($_POST['email']);

        if (0 === strlen(trim($_POST['name']))) {
            $errors[] = "Erro, nome invalido";
        }

        if (0 === strlen(trim($_POST['registry']))) {
            $errors[] = "Erro, matricula invalida";
        }

        if (0 === strlen(trim($_POST['cpf']))) {
            $errors[] = "Erro, cpf invalido";
        }

        if (0 === strlen(trim($_POST['email']))) {
            $errors[] = "Erro, email invalido";
        }
        
        return $errors;
    }
}



