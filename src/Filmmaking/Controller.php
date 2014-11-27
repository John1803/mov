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
        if (isset($_POST) && sizeof($_POST) > 0) {
            foreach ($actorsStudios as $actorStudio) {
                if ($_POST['studioId'] == $actorStudio['id']) {
                    echo $actorStudio['Actor'];
                }
            }
        }
    }
}