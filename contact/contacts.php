<?php
$dbc = new mysqli('localhost', 'root', '' , 'messages');
$sql = "INSERT INTO messages ('title' , 'email' , 'text') 
            VALUES ('title','email','text')";
$result = $dbc-> query( $sql );
$dbc-> close();
echo 'موفقیت';
?>
