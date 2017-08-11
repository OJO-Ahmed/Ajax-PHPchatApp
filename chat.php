<?php
require_once 'chatdb.php';
$query = "SELECT * FROM chat ORDER BY id";
$result = $sql->query($query);
// function 
while($row = $result->fetch_assoc()):
?>
<div id="chat_data">
    <span style="color: blue; font-size:0.8em"><?= "{$row['name']}:";?></span>
    <span style="color: #666;font-size:0.7em"><?= $row['msg'];?></span>
    <button style="background: #fff;border: none;color: red;float: right; margin-top: 2px;">delete</button>
    <span style="float: right;margin-right:5px;font-size:0.7em;color: #333;"><?= $row['date'];?></span>
</div>
<?php endwhile;?>