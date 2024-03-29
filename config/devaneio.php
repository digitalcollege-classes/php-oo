<?php

interface Validator
{
    public function validateRequest(string $flag): array;
}


class CursoValidator
{
    public function validar(): array
    {
        return [];
    }
}

class ProfessorValidator implements Validator
{
    public function validateRequest(): array
    {
        return [
            'teste'
        ];
    }
}


var_dump((new ProfessorValidator())->validacao());