<?php

include "../vendor/autoload.php";

use App\Entity\Professor;
use App\Entity\Curso;
use App\Entity\Turma;

// use App\Entity\{
//     Professor,
//     Curso,
//     Turma
// };

// instanciando/construindo um objeto do tipo professor
$professor = new Professor('Maria', '123.123.123-12');
$professor->nome = 'Maria das Dores';
// $professor->cpf = '999.123.123-12';
$professor->telefones[] = '85 9 8674-0502';

$curso = new Curso('PHP');
$curso2 = new Curso('Javascript');
$cursoA = new Curso('Python');

$turma = new Turma();
$turma->curso = $curso;
$turma->professor = $professor;

echo "<strong>Professor: </strong> {$turma->professor->nome} <br>";
echo "<strong>CPF: </strong> {$turma->professor->cpf} <br>";
echo "<strong>Curso: </strong> {$turma->curso->nome} <br>";

//var_dump($professor);