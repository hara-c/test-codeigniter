<?php echo form_open('research/'.$research['id']); ?>

<h2>Update research!!!</h2>
<p>Research name : (trim|required|max_length[30]|min_length[3]|xss_clean)
<input type = "text", name='name', value="<?php echo set_value('name') ? set_value('name') : $research['name']; ?>", maxlength='30', size='30'>
<?php echo form_error('name', '<div class="error">', '</div>'); ?>
</p>
<p>Research reword (trim|required|is_natural|max_length[5]|min_length[2]|xss_clean)
<input type = "text", name='reword', value="<?php echo set_value('reword') ? set_value('reword') : $research['reword']; ?>", maxlength='30', size='30'>

<?php echo form_error('reword', '<div class="error">', '</div>'); ?>
</p>

<div><input type="submit" value="Update" /></div>

</form>


