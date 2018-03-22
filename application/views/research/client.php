
<h3>ResearchList</h3>
<table>
<tr><th>name</th><th>is_done</th><th>rewords</th><th>created date</th></tr>
<?php foreach($show_lists as $row): ?>
<tr><?php echo ("<td>".$row['name']."</td><td>".$row['is_done']."</td><td>".$row['reword']."</td><td>".$row['created_date']."</dt>")?></tr>
<?php endforeach; ?>
</table>

<a href='research/create'>CREATE RESEARCH</a>
