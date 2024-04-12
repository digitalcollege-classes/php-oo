<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Entity\Curso;

final class CursoApiController extends AbstractApiController
{
    public mixed $entityManager;

    public function __construct()
    {
        $this->entityManager = parent::entityManager();
    }

    public function listar(): void
    {
        $cursoRepository = $this->entityManager->getRepository(Curso::class);
        
        parent::response($cursoRepository->findAll(), 200);
    }
}