<?php
include "employeet.php";
if ($_POST)
{
	$en=$_POST['name'];
	$gn=$_POST['gender'];
	$dob=$_POST['dob'];
	$qf=$_POST['qualification'];
	$ad=$_POST['address'];	
	$ph=$_POST['phoneno'];
	
	$id=$_POST['id'];
	
	$qry=mysqli_query($conn,"Update employee set employeename='$en',Gender='$gn',dob='$dob',qualification='$qf',
		address='$ad',phoneno='$ph' where employeeid ='$id' ");
	if(!$qry)
		die("Not UPDATED<br>".mysqli_error($conn));
	else
		echo "Employee Updated Successfully<br>";
                include "viewemployee.php";
}
?>
<html><br> <a href="employe.html"><b>Back</b></a> </html> 