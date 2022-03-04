<?php

include_once 'database.inc.php';
mysqli_select_db($conn, 'talks');

$sql_query = 'SELECT * FROM posts';
$result = mysqli_query($conn, $sql_query);
$rows_touched =  mysqli_num_rows($result);

if($rows_touched == 0){
    echo '<center><h2 style="color: rgb(3, 226, 255);">🙁No talks to display</h2></center>';
}
else{
    echo '<center><h2 style="color: rgb(3, 226, 255);">Comming soon</h2></center>';
}

?>