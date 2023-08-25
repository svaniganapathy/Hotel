<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'project');
if(!$conn)
 die("Connection Error".mysqli_error($conn));
?>
