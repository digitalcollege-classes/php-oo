<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use App\Adapter\MysqlAdapter;
use App\Adapter\PostgresAdapter;

require_once "vendor/autoload.php";

$isDevMode = true;
$paths = [__DIR__."/src/Entity"];
$dbParams = [
    'driver' => 'pdo_mysql', 
    'user' => 'user',
    'password' => 'password',
    'host' => 'setup-mysql',
    'dbname' => 'db_name',
];

// Configuração da conexão MySQL
$mysqlAdapter = new MysqlAdapter();
$pdo_mysql = $mysqlAdapter->getConnection();

// Configuração da conexão PostgreSQL
$postgresAdapter = new PostgresAdapter();
$pdo_postgres = $postgresAdapter->getConnection();

// Crie a configuração do ORM
$ormConfig = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $ormConfig);

return [
    'entityManager' => $entityManager,
    'pdo_mysql' => $pdo_mysql,
    'pdo_postgres' => $pdo_postgres
];
