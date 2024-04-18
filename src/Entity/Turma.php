<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity] #[Table(name: 'turma')]
class Turma
{
    #[Id] #[GeneratedValue] #[Column(type: 'integer')]
    public ?int $id = null;

    #[Column(length: 30, nullable: false)]
    public string $name;

    #[Column(type: 'text')]
    public string $description;

    #[Column(type: 'boolean')]
    public bool $status;

    #[ManyToMany(targetEntity: Aluno::class)]
    #[JoinTable(name: 'alunos_curso')]
    public Collection $alunos;

    #[ManyToOne(targetEntity: Curso::class)]
    #[JoinColumn(name: 'curso_id', referencedColumnName: 'id')]
    public Curso $curso;

    public function __construct(string $name, string $description, Curso $curso)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = true;
        $this->alunos = new ArrayCollection();
        $this->curso = $curso;
    }
}

