<?php

namespace Filmmaking;

class Controller {

    public function studiosAction()
    {
        $data = new Database();
        $studios = $data->getStudios();
        $view = new GenerateHtml("../src/Resources/view/layout.php");
        $view->generatePage("../src/Resources/view/studios.php", array('studios' => $studios));
    }

    public function actorsStudiosAction ()
    {
        $data = new Database();
        $actorsStudios = $data->getActorsStudios();
        $studioId = $_POST['studioId'];
            foreach ($actorsStudios as $actorStudio) {
                if ($studioId == $actorStudio['id']) {
                    $view = new GenerateHtml("../src/Resources/view/layout.php");
                    $view->generatePage("actors.php", array('studioId' => $studioId,
                                                            'actorsStudios' => $actorsStudios,
                    ));
                }
            }

    }
}