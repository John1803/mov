<?php

namespace Filmmaking;

class Controller {

    public function actorsFeesAction() {
        $data = new Database();
        $actorsFees = $data->getActorsFees();
        $view = new GenerateHtml("../src/Resources/view/layout.php");
        $view->generatePage("../src/Resources/view/actorsfees.php", array('actorsFees' => $actorsFees));
    }

    public function studiosAction()
    {
        $data = new Database();
        $studios = $data->getStudios();
        $view = new GenerateHtml("../src/Resources/view/layout.php");
        $view->generatePage("../src/Resources/view/studios.php", array('studios' => $studios));
    }

    public function actorsStudiosAction ()
    {
        if (isset($_POST) && sizeof($_POST) > 0) {
            $data = new Database();
            $actorsStudios = $data->getActorsStudios();
            $studioId = $_POST['studioId'];
            $view = new GenerateHtml("../src/Resources/view/layout.php");
            $view->generatePage("../src/Resources/view/actors.php", array('studioId' => $studioId,
                                                                            'actorsStudios' => $actorsStudios,
            ));
        }
    }
}