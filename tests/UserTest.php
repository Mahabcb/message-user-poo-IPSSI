<?php

namespace Tests;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    public function testRoleIsUser()
    {
        $user = new User();
        $this->assertEquals(['ROLE_USER'], $user->getRoles());
    }

    public function testLocaltion()
    {
        $user = new User();
        $user->setLocation('London');
        $this->assertEquals('London', $user->getLocation());
    }
}