
<?php $studios=$this->studios; ?>
<form action="/actorsstudios" method="post">
    <p><select class="bootstrap-select btn" name="studioId">
            <option disabled>Chose the studio</option>
            <?php foreach ($studios as $studioTitle): ?>
    <option value="<?php echo $studioTitle['fid'] ?>"><?php echo $studioTitle['ftitle'] ?></option>
<?php endforeach ?>
</select></p>
<p><input type="submit" value="Send"></p>
</form>
