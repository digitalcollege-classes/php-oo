<?php

declare(strict_types=1);

namespace App\Controller;

final class LoginController extends AbstractController
{
    public function index(): void
    {
        parent::render('login/index');
    }
}
