<?php

declare(strict_types=1);

namespace App\Validator;

class CursoValidator implements Validator
{
    public function validateRequest(): array
    {
        $errors = [];

        $outputName = strip_tags($_POST['name']);
        $outputDescription = strip_tags($_POST['description']);

        if ($outputName !== $_POST['name']) {
            $errors[] = "Erro, caracteres inválidos no nome";
        }

        if ($outputDescription !== $_POST['description']) {
            $errors[] = "Erro, caracteres inválidos na descrição";
        }

        if (0 === strlen(trim($_POST['name']))) {
            $errors[] = "Erro, nome invalido";
        }

        if (0 === strlen(trim($_POST['description']))) {
            $errors[] = "Erro, descricao invalida";
        }
        
        return $errors;
    }
}



