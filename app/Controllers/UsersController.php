<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\User;

class UsersController
{
    public function index(): void
    {
        $users = new Users([
            new User('John'),
            new User('Peter'),
            new User('Anna'),
        ]);
        require_once 'app/Views/UserView.php';
    }
}