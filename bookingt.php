<?php
include "conn.php";
$sql="CREATE TABLE if not exists booking(
roomid  int(10) Primary key,
bookingdate date not null,
checkin date not null,
checkout date not null)";

$retval=mysqli_query($conn,$sql);
if(!$retval)
 die("Table cannot created".mysqli_error($conn));

?>