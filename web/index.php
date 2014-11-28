<?php
require '../vendor/autoload.php';

use Filmmaking\Controller;

$uri = $_SERVER['REQUEST_URI'];
$controller = new Controller();
if ('/' == $uri) {
    $controller->studiosAction();
} elseif ('/actorsstudios' == $uri) {
    $controller->actorsStudiosAction();
} elseif ('/actorsfees' == $uri) {
    $controller->actorsFeesAction();
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}




