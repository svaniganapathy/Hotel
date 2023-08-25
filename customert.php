<?php
include "conn.php";
$sql="CREATE TABLE if not exists customer(
customerid int(10) PRIMARY KEY auto_increment,
customername varchar(50) not null,
gender varchar(10) not null,
dob date not null,
address  varchar(50) not null,
contactno varchar(10) not null)";

$retval=mysqli_query($conn,$sql);
if(!$retval)
 die("Table cannot created".mysqli_error($conn));
else
 echo "Table created";
?>