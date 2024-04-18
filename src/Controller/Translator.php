<?php

declare(strict_types=1);

namespace App\Controller;

class Translator
{
    private static ?Translator $instance = null;
    private array $translations = [];

    private function __construct()
    {
        
        $lang = $_SESSION['language'] ?? 'pt-br';
        $this->translations = include dirname(__DIR__,2). "/translations/{$lang}.php";
    }

    public static function getInstance(): Translator
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function translate(string $key): string
    {
        return $this->translations[$key] ?? $key;
    }

   
}