<html>
<head>
<title>Login</title>
<style type="text/css">
<!--
.error {color:red; line-height:1.5;}
-->
</style>
</head>
<body>
<h2>Login Form</h2>

<?php
    if(isset($login_error_msg)) {
        echo "<div class=\"error\">$login_error_msg</div>";
    }
?>

<?php echo form_open('login'); ?>

<p> ID : (trim|required|alpha_dash|xss_clean)
<input type = "text", name='id', value="<?php echo set_value('id'); ?>", maxlength='30', size='30'>
<?php echo form_error('id', '<div class="error">', '</div>'); ?>
</p>
<p>PASSWORD : (trim|required|alpha_dash|xss_clean)
<input type = "text", name='password',value="<?php echo set_value('password'); ?>", maxlength='30', size='30'>
<?php echo form_error('password', '<div class="error">', '</div>'); ?>
</p>
<div><input type="submit" value="Login" /></div>

</form>

</body>
</html>

