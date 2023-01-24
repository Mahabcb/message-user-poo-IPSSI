<?php

namespace Tests;

use App\Admin;
use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase{

    public function testRoleIsAdmin()
    {
        $admin = new Admin();
        $this->assertEquals(['ROLE_ADMIN'], $admin->getRoles());
    }

    public function testModeration()
    {
        $admin = new Admin();
        $admin->setName('David');
        $this->assertEquals('David est en train de modérer', $admin->moderer());
    }

    public function testAdministration()
    {
        $admin = new Admin();
        $admin->setName('David');
        $this->assertEquals('David est en train d\'administrer ', $admin->administrer());
    }

}