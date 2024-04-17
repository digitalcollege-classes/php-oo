<?php
// PopulateCoursesCommand.php

use App\Entity\Curso;
use Doctrine\ORM\EntityManager;

interface Command{
    public function execute();
}

class PopulateCoursesCommand implements Command {
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function execute() {
        $coursesData = [
            ['name' => 'PHP', 'description' => 'O curso da Páscoa.', 'status' => true],
            ['name' => 'NextJS', 'description' => 'O novo PHP.', 'status' => true],
            ['name' => 'React', 'description' => 'Aprenda a construir varias coisas com React.', 'status' => true],
            ['name' => 'Python', 'description' => 'A MELHOR LINGUAGEM DO MUNDO <3', 'status' => true],
            ['name' => 'JavaScript', 'description' => 'Curso de JavaScripto', 'status' => true],
            ['name' => 'Vue.js', 'description' => 'Curso Veu.js', 'status' => true],
            ['name' => 'Angular', 'description' => 'Plataforma para construção de aplicações web escaláveis.', 'status' => true],
            ['name' => 'Java', 'description' => 'Linguagem de programação usada em uma variedade de plataformas.', 'status' => true],
            ['name' => 'Ruby on Rails', 'description' => 'Framework de desenvolvimento web rápido e eficiente em Ruby.', 'status' => true],
            ['name' => 'C#', 'description' => 'Essa linguagem é um C#', 'status' => true],
            ];

        foreach ($coursesData as $courseData) {
            $course = new Curso();
            $course->setName($courseData['name']);
            $course->setDescription($courseData['description']);
            $course->setStatus($courseData['status']);
            
            $this->entityManager->persist($course);
        }

        $this->entityManager->flush();
        
        echo "Cursos populados no banco de dados.\n";
    }
}
