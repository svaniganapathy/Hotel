<?php
include "conn.php";
$sql="CREATE TABLE if not exists employee(
employeeid int(10) UNIQUE KEY  auto_increment,
empname varchar(50) not null,
gender varchar(10) not null,
dob date not null,
qualification varchar(10) not null,
address  varchar(25) not null,
contactno varchar(10) not null)";

$retval=mysqli_query($conn,$sql);
if(!$retval)
 die("Table cannot created".mysqli_error($conn));
?>