<?php

include '../vendor/autoload.php';

use App\Entity\Aluno;
use App\Entity\Professor;
use App\Entity\Diretor;


$aluno = new Aluno('Matheus', '123.123.123-12');

$professor = new Professor(
    cpf: '123.111.222-33',
    nome: 'Maria',
    cnpj: '24.911.728/0001-33'
);

$diretor = new Diretor(
    cpf: '123.111.789-33',
    nome: 'Chiquinha',
    ctps: '1234.1234.1234'
);

if ('Matheus' === $aluno->nome) {
    echo "nome do aluno esta ok".PHP_EOL;
}

if ('Maria' === $professor->nome) {
    echo "nome do prof esta ok CNPJ {$professor->cnpj}".PHP_EOL;
}

if ('Chiquinha' === $diretor->nome) {
    echo "nome do diretor esta ok".PHP_EOL;
}


//docker-compose up -d
//docker-compose exec php bash

