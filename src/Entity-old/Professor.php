<?php

declare(strict_types=1);

namespace App\Entity;

class Professor extends Prestador
{
    public float $valorHora;
    public bool $status;
    public array $telefones = [];
}
