<?php
declare(strict_types=1);
namespace App\Adapter;

use App\Adapter\DatabaseAdapterInterface;

class MysqlAdapter implements DatabaseAdapterInterface {
    public function getConnection(): \PDO {
        $host = 'setup-mysql';
        $dbname = 'db_name';
        $user = 'user';
        $password = 'password';

        $dsn = "mysql:host=$host;dbname=$dbname";
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];

        try {
            $pdo = new \PDO($dsn, $user, $password, $options);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}
