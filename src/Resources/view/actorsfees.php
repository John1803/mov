<?php $actorsFees = $this->actorsFees; ?>
<?php foreach ($actorsFees as $actorFee): ?>
    <div class="col-md-6"><?php echo $actorFee['Actor'] ?></div>
    <div class="col-md-6"><?php echo $actorFee['Fees'] ?></div>
<?php endforeach ?>