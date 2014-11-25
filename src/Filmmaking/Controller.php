<?php

namespace Filmmaking;
//require "../Resources/view/studios.php";
class Controller {

    public function studiosAction() {

        $data = new Database();
        $studios = $data->getStudios();
        $view = new GenerateHtml("../src/Resources/view/layout.php");
        $view->generatePage("../src/Resources/view/studios.php", array('studios' => $studios));

    }
} 