<html>
<head>
<title>My Form</title>
</head>
<body>

<h5>ResearchList</h5>
<?php foreach($show_lists as $research): ?>
<p>
<?php foreach($research as $key => $value):?>
<?php echo ("$key => $value"."/") ?>
<?php endforeach; ?>
</p>
<?php endforeach; ?>

</form>

</body>
</html>

