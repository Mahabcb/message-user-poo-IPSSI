<?php

namespace App;
use App\AbstractUser;
use App\AdminInterface;

class Admin extends AbstractUser implements AdminInterface{

    public function __construct()
    {
        $this->roles = ['ROLE_ADMIN'];
    }

    public function administrer(): string
    {
        return $this->name . ' est en train d\'administrer ';
    }

    public function moderer(): string
    {
        return $this->name . ' est en train de modérer';
    }
}