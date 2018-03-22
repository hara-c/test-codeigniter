
<?php echo form_open('research/do_create'); ?>

<h2>Let's create new research!!!</h2>
<h5>Research name</h5>
<?php echo form_input($name_form); ?>

<h5>Research reword</h5>
<?php echo form_input($reword_form); ?>

<h5>Research max</h5>
<?php echo form_input($max_form); ?>

<div><input type="submit" value="Submit" /></div>

</form>


