<?php

declare(strict_types=1);

namespace App\Factory\Turma;

use App\Entity\Curso;
use App\Entity\Aluno;
use App\Entity\Disciplina;
use App\Entity\Turma;

interface AbstractTurmaFactory
{
    public function createCurso(
        string $nomeCurso,
        string $descricaoCurso,
    ): Curso;

    public function createTurma(
        string $name, 
        string $description, 
        Curso $curso ,
        array $alunos
    ): Turma;

    public function createAluno(
        string $nomeAluno,
        string $descricaoAluno,
        string $cpfAluno,
        string $emailAluno,
    ): Aluno;

    public function createDisciplina(
        string $nomeDisciplina,
        int $cargaHoraria
    ): Disciplina;
}