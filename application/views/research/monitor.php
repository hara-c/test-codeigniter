
<h3>MonitorList</h3>
<table>
<tr><th>name</th><th>create_user_id</th><th>reword</th><th>is_done</th></tr>
<?php foreach($show_lists as $row): ?>
<tr><?php
      #TEMP
        $status = $row['is_done'] ?  'DONE' : anchor('research/execute/'.$row['id'],'DO!');

        echo ("<td>".$row["name"]."</td><td>".$row["create_user_id"]."</td><td>".$row['reword'].'</td><td>i',$status,'</td>')

?></tr>
<?php endforeach; ?>
</table>

