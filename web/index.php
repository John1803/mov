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
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}




