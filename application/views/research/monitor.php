
<h3>MonitorList</h3>
<table>
<tr><th>name</th><th>create_user_id</th><th>is_done</th></tr>
<?php foreach($show_lists as $row): ?>
<tr><?php echo ("<td>".$row["name"]."</td><td>".$row["create_user_id"]."</td>")?></tr>
<?php endforeach; ?>
</table>

