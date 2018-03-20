
<h3>MonitorList</h3>
<table>
<tr><th>Research->name</th><th>Research->create_user_id</th></tr>
<?php foreach($show_lists as $row): ?>
<tr><?php echo ("<td>".$row["name"]."</td><td>".$row["create_user_id"]."</td>")?></tr>
<?php endforeach; ?>
</table>

