<?php
require '../vendor/autoload.php';

use Filmmaking\Controller;

$uri = $_SERVER['REQUEST_URI'];

if ('/' == $uri) {
    $controller = new Controller();
    $controller->studiosAction();
} elseif ('/actorsstudios' == $uri) {
    $controller = new Controller();
    $controller->actorsStudiosAction();
}




