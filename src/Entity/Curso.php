<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Table;

#[Entity()] #[Table(name: 'course')]
class Curso
{
    #[Id] #[GeneratedValue] #[Column(type: 'integer')]
    public int $id;
    
    #[Column(length: 30, nullable: false)]
    public string $name;

    #[Column]
    public string $description;

    #[Column(type: 'boolean')]
    public bool $status;



    // public function __construct(string $name) {
    //     $this->name = $name;
    // }
}
