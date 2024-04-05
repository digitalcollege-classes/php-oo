<?php

declare(strict_types=1);

namespace App\Entity;

abstract class Pessoa
{
    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf) 
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        if (11 !== strlen($cpf)) {
            die('CPF INVALIDO'.PHP_EOL);
        }

        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}
