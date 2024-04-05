<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Table;

#[Entity] #[Table(name: 'subject')]
class Disciplina
{
    #[Id] #[GeneratedValue] #[Column(type: 'integer')]
    public int $id;

    #[Column(length: 30)]
    public string $name;

    #[Column(type: 'integer')]
    public int $workload;
}
