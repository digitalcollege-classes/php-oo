<?php

declare(strict_types=1);

namespace App\Entity;

abstract class Funcionario extends Pessoa
{
    public string $ctps;

    public function __construct(string $nome, string $cpf, string $ctps) 
    {
        parent::__construct($nome, $cpf);
    }
}



$tecnoveti = new Prestador();
