<?php

namespace App\Repositories;

use App\User;

class DbUserRepositoriy implements UserRepositoriy
{

    public function create($attributes)
    {
        User::create();
    }
}
