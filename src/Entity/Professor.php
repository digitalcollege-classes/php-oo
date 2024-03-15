<?php

declare(strict_types=1);

namespace App\Entity;

class Professor
{
    public string $nome;
    public readonly string $cpf;
    public float $valorHora;
    public bool $status;
    public array $telefones = [];

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
}
