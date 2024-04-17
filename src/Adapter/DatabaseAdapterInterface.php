<?php
declare(strict_types=1);

namespace App\Adapter;

interface DatabaseAdapterInterface {
    public function getConnection(): \PDO;
}