<?php
include "conn.php";
$sql="CREATE TABLE if not exists room(
roomid int(11) primary key auto_increment,
roomtype varchar(50) not null,
facilities varchar(20) not null,
cost int(10) not null,
image varchar(150) not null)";

$retval=mysqli_query($conn,$sql);
if(!$retval)
 die("Table cannot created".mysqli_error($conn));
?>
