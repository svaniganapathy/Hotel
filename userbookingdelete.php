<?php
include "conn.php"; 
 include "userbooking.html";
if(isset($_POST['delete']))
{
include "conn.php";

$customerid=$_POST['customerid'];

$sql="Delete from booking where customerid=$customerid";
$retval=mysqli_query($conn,$sql);
if(!$retval)
 die('No data deleted'.mysqli_error($conn));

echo "<center><b>Your Booking has been cancelled</b></center>";
}

?>