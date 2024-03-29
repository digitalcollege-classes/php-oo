<?php

declare(strict_types=1);

namespace App\Validator;

class CursoValidator implements Validator
{
    public function validateRequest(): array
    {
        $errors = [];

        if (0 === strlen(trim($_POST['name']))) {
            $errors[] = "Erro, nome invalido";
        }

        if (0 === strlen(trim($_POST['description']))) {
            $errors[] = "Erro, descricao invalida";
        }

        return $errors;
    }
}



