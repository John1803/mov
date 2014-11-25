<?php
require "../vendor/autoload.php";
//require "../src/Resources/view/studios.php";
use Filmmaking\Database;
use Filmmaking\GenerateHtml;

$controller = new \Filmmaking\Controller();
$controller->studiosAction();

