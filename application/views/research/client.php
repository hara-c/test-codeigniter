
<h3>ResearchList</h3>
<table>
<tr><th>name</th><th>is_done</th><th>rewords</th><th>created date</th><th>Edit</th></tr>
<?php foreach($show_lists as $row): ?>
<tr><?php
    $date = date('Y/m/d G:i', strtotime($row['created_date']));
    $edit_link = $row['is_done'] ? '---' : anchor('research/'.$row['id'], 'EDIT RESEARCH');

    echo ("<td>".$row['name']."</td><td>".$row['is_done']."</td><td>".$row['reword']."</td><td>$date</td><td>$edit_link</td>")?>
</tr>
<?php endforeach; ?>
</table>

<?php echo anchor('research/create', 'CREATE RESEARCH'); ?>
