<?php
 include "conn.php";
  $sql="CREATE Table if not exists admin(
    loginid varchar(50) primary key,
    password varchar(8) not null.
   cpassword varchar(8) not null)";
$retval=mysqli_query($conn,$sql);
if(!$retval)
  die("Table not created".mysqli_error($conn));

?>