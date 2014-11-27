<?php
$studioId = $this->studioId;
$actorsStudios = $this->actorsStudios;

foreach ($actorsStudios as $actorsStudio):
    if ($studioId == $actorsStudio['id']):
?>

<div>
    <div class="col-md-4">
        <?php echo $actorsStudio['FILMSTUDIO'];?>
    </div>
    <div class="col-md-4">
        <?php echo $actorsStudio['Actor'];?>
    </div>
    <div class="col-md-4">
        <?php echo $actorsStudio['Number of movies'];?>
    </div>
</div>
    <?php endif ?>
<?php endforeach ?>

