<?php

use App\Admin;
use App\User;

/**
 * Instancier un objet user et un objet message
 * Envoyer un message par l'utilisateur
 */

require_once('vendor/autoload.php');
$stephane = new Admin();
$message = new App\Message();

$stephane->setName('Stephane')
          ->setId(1)
          ->setLocation('Paris');
$message->setAuthor($stephane)
          ->setContent('Bonjour je m\'appelle Stéphane');

dump($message);
dump($stephane);

echo $message->render();