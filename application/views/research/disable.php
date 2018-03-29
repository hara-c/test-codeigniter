<?php echo form_open('research/disable/'.$research['id']); ?>

<h2>Disable research??</h2>
<p> name : <?php echo $research['name']; ?> </p>
<p> reword : <?php echo $research['reword']; ?> </p>
<p> created_date : <?php echo $research['created_date']; ?> </p>

<div><input type="submit" value="Disable" /></div>

</form>


