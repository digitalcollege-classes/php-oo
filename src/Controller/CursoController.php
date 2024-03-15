<?php

declare(strict_types=1);

namespace App\Controller;

final class CursoController
{
    public function listar(): void
    {
        echo "Listar";
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