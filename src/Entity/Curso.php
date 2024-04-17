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

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    // Setters
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }
}
