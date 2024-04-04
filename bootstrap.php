<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__."/src/Entity"],
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'dbname' => 'db_name',
    'user' => 'user',
    'password' => 'password',
    'host' => 'setup-mysql',
], $config);

$entityManager = new EntityManager($connection, $config);

return $entityManager;