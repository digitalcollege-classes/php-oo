<?php

declare(strict_types=1);

namespace App\Controller;

class TranslateController
{
    public function translate(): void
    {
        $_SESSION['language'] = $_GET['lang'];

        $previousRoute = $_SERVER['HTTP_REFERER'];

        header("location: {$previousRoute}");
    }
}
