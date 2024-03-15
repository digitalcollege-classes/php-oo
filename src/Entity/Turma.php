<?php

declare(strict_types=1);

namespace App\Entity;

class Turma
{
    public string $codigo;
    public Curso $curso;
    public string $horario;
    public Professor $professor;
    public array $alunos;
    public string $lab;
}
