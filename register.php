<?php
include "conn.php";
$sql="CREATE TABLE if not exists register(
customerid  int(10) Primary key  auto_increment,
name  varchar(20)  not null,
gender varchar(10) not null,
dob date not null,
address  varchar(50) not null,
contactno varchar(10) not null
Username varchar(20)  not null,
Password varchar(10) not null,
ConfirmPassword varchar(8)  not null)";

$retval=mysqli_query($conn,$sql);
if(!$retval)
 die("Table cannot created".mysqli_error($conn));

?>