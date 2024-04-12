<?php

declare(strict_types=1);

namespace App\Controller\Api;

abstract class AbstractApiController
{
    public function response(mixed $data, int $statusCode): void
    {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code($statusCode);
        echo json_encode($data);
    }

    public function entityManager(): mixed {
        $entityManager = require_once dirname(__DIR__, 3).'/bootstrap.php';
        return $entityManager;
    }
}
