<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Table;

#[Entity()] #[Table(name: 'student')]
class Aluno
{
    #[Id] #[GeneratedValue] #[Column(type: 'integer')]
    public int $id;
    
    #[Column(length: 30, nullable: false)]
    public string $name;

    #[Column]
    public string $registry;

    #[Column]
    public string $cpf;

    #[Column]
    public string $email;

    #[Column]
    public DateTime $created_at;

}
