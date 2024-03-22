<?php

declare(strict_types=1);

namespace App\Entity;

abstract class Prestador extends Pessoa
{
    public string $cnpj;

    public function __construct(string $nome, string $cpf, string $cnpj)
    {
        $this->cnpj = $cnpj;

        parent::__construct($nome, $cpf);
    }
}