<?php

declare(strict_types=1);

namespace App\Validator;

class CursoValidator implements Validator
{
    public function validateRequest(): array
    {
        $errors = [];

        $_POST['name'] = strip_tags($_POST['name']);
        $_POST['description'] = strip_tags($_POST['description']);

        if (0 === strlen(trim($_POST['name']))) {
            $errors[] = "Erro, nome invalido";
        }

        if (0 === strlen(trim($_POST['description']))) {
            $errors[] = "Erro, descricao invalida";
        }
        
        return $errors;
    }
}



