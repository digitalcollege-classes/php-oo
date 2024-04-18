<?php

declare(strict_types=1);

namespace App\Controller;

use App\Factory\Turma\TurmaFullStackFactory;
use App\Entity\Aluno;
use App\Entity\Turma;

final class TurmaController extends AbstractController
{
    public function add(string $type, array $cursoData, array $alunosData, array $disciplinasData, array $turmaData): Turma
    {
        if ($type === 'fullstack') {
            $factory = new TurmaFullStackFactory();

            $curso = $factory->createCurso($cursoData['name'], $cursoData['description']);

            $curso->disciplinas = [];
            foreach ($disciplinasData as $disciplinaData) {
                $disciplina = $factory->createDisciplina($disciplinaData['name'], $disciplinaData['workload']);
                $curso->disciplinas[] = $disciplina;
            }

            foreach ($alunosData as $alunoData) {
                $aluno = new Aluno(
                    $alunoData['name'],
                    $alunoData['registry'],
                    $alunoData['cpf'],
                    $alunoData['email'],
                    new DateTime()
                );
                $curso->addAluno($aluno);
            }

            $turma = $factory->createTurma($turmaData['name'], $turmaData['description'], $curso);
            
            return $turma;
        }
    }
}
