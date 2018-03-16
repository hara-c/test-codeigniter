<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('login'); ?>

<h5>Id</h5>
<?php echo form_input($id_form); ?>

<h5>Password</h5>
<?php echo form_input($pass_form); ?>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>

