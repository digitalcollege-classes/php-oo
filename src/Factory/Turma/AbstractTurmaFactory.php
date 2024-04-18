<?php

declare(strict_types=1);

namespace App\Factory\Turma;

use App\Entity\Curso;
use App\Entity\Aluno;
use App\Entity\Disciplina;
use App\Entity\Turma;

interface AbstractTurmaFactory
{
    public function createCurso(): Curso;
    public function createTurma(): Turma;
    public function createAluno(): Aluno;
    public function createDisciplina(): Disciplina;
}