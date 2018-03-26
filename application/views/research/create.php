
<?php echo form_open('research/create'); ?>

<h2>Let's create new research!!!</h2>
<p>Research name : (trim|required|max_length[30]|min_length[3]|xss_clean)
<input type = "text", name='name', value="<?php echo set_value('name'); ?>", maxlength='30', size='30'>
<?php echo form_error('name', '<div class="error">', '</div>'); ?>
</p>
<p>Research reword (trim|required|is_natural|max_length[5]|min_length[2]|xss_clean)
<input type = "text", name='reword', value="<?php echo set_value('reword'); ?>", maxlength='30', size='30'>

<?php echo form_error('reword', '<div class="error">', '</div>'); ?>
</p>

<!--
<h5>Research max</h5>
<?php echo form_input($max_form); ?>
-->

<div><input type="submit" value="Submit" /></div>

</form>


