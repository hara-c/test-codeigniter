
<h3>ResearchList</h3>
<table>
<tr><th>Research->name</th><th>Research->is_done</th></tr>
<?php foreach($show_lists as $row): ?>
<tr><?php echo ("<td>".$row["name"]."</td><td>".$row["is_done"]."</td>")?></tr>
<?php endforeach; ?>
</table>

