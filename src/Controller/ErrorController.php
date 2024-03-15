<?php

declare(strict_types=1);

namespace App\Controller;

final class ErrorController extends AbstractController
{
    public function notFound(): void
    {
        echo "Erro: pagina nao encontrada";
    }
}
