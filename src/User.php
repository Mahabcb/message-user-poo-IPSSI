<?php

namespace App;

use App\AbstractUser;

class User extends AbstractUser{

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
    }
}