<?php

$studioId = $this->studioId;
$actorsStudios = $this->actorsStudios;

foreach ($actorsStudios as $actorsStudio) {
    if ($studioId == $actorsStudio['id']) {
        echo $actorsStudio['Actor'];
    }
}

