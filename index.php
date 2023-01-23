<?php
require_once('vendor/autoload.php');
use App\Message;

$user = (new App\User())
     ->setName("John Doe")
     ->setLocation("Paris");


$message = new Message();
$author = $user->getName();
$content = $message->setContent("Hello World");
$message->setAuthor($author);


print_r($message->sendMessage($content, $author));
