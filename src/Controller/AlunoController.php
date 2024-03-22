<?php


declare(strict_types=1);

namespace App\Controller;

class AlunoController {
    // Métodos da classe AlunoController
    public function matricula(): void
    {
        echo "Matricula";
    }

    public function nome(): void
    {
        echo "<marquee>Nome</marquee>";
    }

    public function curso(): void
    {
        echo "Curso";
    }

    public function turma(): void
    {
        echo "Turma";
    }

    public function notas(): void
    {
        echo "Notas";
    }
}

?>
