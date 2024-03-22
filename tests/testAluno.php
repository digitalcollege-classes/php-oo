<?php

include '../vendor/autoload.php';

use App\Entity\Aluno;

$minina = new Aluno('Maria', '12312312312');

$minina->setNome('Maria das Dores');
$minina->setCpf('12399900012');



echo "Nome: {$minina->getNome()}" . PHP_EOL;
echo "CPF: {$minina->getCpf()}" . PHP_EOL;