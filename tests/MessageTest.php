<?php

namespace Tests;

use App\User;
use DateTime;
use App\Message;
use App\AbstractUser;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase{

    public function testDateMessage()
    {
        $message = new Message();
        $this->assertInstanceOf(DateTime::class, $message->getCreatedAt());
    }

    public function testContentMessage()
    {
        $message = new Message();
        $message->setContent('Hello World');
        $this->assertEquals('Hello World', $message->getContent());
    }

    public function testAuthorMessageInstanceOfABstractUser()
    {
        $message = new Message();
        $user = (new User())->setName('David');
        $message->setAuthor($user);
        $this->assertInstanceOf(AbstractUser::class, $message->getAuthor());
    }

    public function testRenderMessage()
    {
        $message = new Message();
        $user = (new User())->setName('David');
        $message->setAuthor($user);
        $message->setContent('Hello World');
        $this->assertEquals('Hello World by David at '. $message->getCreatedAt()->format("d/m/Y H:i:s"), $message->render());
    }



}