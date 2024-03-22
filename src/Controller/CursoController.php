<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Curso;

final class CursoController extends AbstractController
{
    public function listar(): void
    {
        $cursos = [
            new Curso('PHP'),
            new Curso('Javascript'),
        ];

        parent::render('curso/listar', [
            'cursos' => $cursos,
        ]);
    }

    public function add(): void
    {
        echo "<marquee>Adicionar</marquee>";
    }

    public function editar(): void
    {
        echo "Editar";
    }

    public function excluir(): void
    {
        echo "Excluir";
    }
}