<?php

namespace Filmmaking;

class Controller {

    public function studiosAction() {

        $data = new Database();
        $studios = $data->getStudios();
        $view = new GenerateHtml("../Resources/view/layout.php");
        $view->generatePage("../Resources/view/studios.php", array('studios' => $studios));

    }
} 