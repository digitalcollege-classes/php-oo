<?php

declare(strict_types=1);

namespace App\Entity;

class Curso
{
    #[@Column()]
    public int $id;
    
    #[@Column()]
    public string $name;

    #[@Column()]
    public string $description;


    // public function __construct(string $name) {
    //     $this->name = $name;
    // }
}
