<?php

declare(strict_types=1);

namespace App\Controller;

final class HomeController extends AbstractController
{
    public function index(): void
    {
        parent::render('home/index');
    }
}
