
<?php echo form_open('research/do_create'); ?>

<h2>Let's create new research!!!</h2>
<p>Research name : 
<input type = "text", name='name', value="<?php echo set_value('name'); ?>", maxlength='30', size='30'>
</p>
<p>Research reword : 
<input type = "text", name='reword', value="<?php echo set_value('reword'); ?>", maxlength='30', size='30'>
</p>

<!--
<h5>Research max</h5>
<?php echo form_input($max_form); ?>
-->

<div><input type="submit" value="Submit" /></div>

</form>


