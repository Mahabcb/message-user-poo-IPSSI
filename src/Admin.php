<?php

namespace App;
use App\AbstractUser;

class Admin extends AbstractUser{

    public function __construct()
    {
        $this->roles = ['ROLE_ADMIN'];
    }
}