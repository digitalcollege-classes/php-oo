<?php

declare(strict_types=1);

namespace App\Factory\Curso;

use App\Entity\Curso;
use App\Entity\Aluno;
use App\Entity\Disciplina;
use App\Entity\Turma;
use DateTime;

class CursoFullStackFactory implements AbstractTurmaFactory
{
    public function createCurso(
        string $nomeCurso, 
        string $descricaoCurso,
    ): Curso
    {
        return new Curso($nomeCurso, $descricaoCurso);
    }
    
    public function createAluno(
        string $nomeAluno,
        string $descricaoAluno,
        string $cpfAluno,
        string $emailAluno,
    ): Aluno
    {
        return new Aluno($nomeAluno, $descricaoAluno, $cpfAluno, $emailAluno, new DateTime());
    }

    public function createDisciplina(
        string $nomeDisciplina,
        int $cargaHoraria
    ): Disciplina
    {
        return new Disciplina($nomeDisciplina, $cargaHoraria);
    }
    
    public function createTurma(
        string $name, 
        string $description, 
        Curso $curso 
    ): Turma
    {
        return new Turma($name, $description, $curso);
    }
}
