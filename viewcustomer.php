<?php
include"customer.html";
include "conn.php";
$sql="Select * from register";
$qry=mysqli_query($conn,$sql);
if(!$qry)
 die("data cannot bereceived".mysqli_error($conn));
$rcd=mysqli_fetch_array($qry);
if(!$rcd)
 die("No records found".mysqli_error($conn));
?>


<html>
<body>
<table border=3 align=center>
<tr><center><p style="font-size:40px; color:BLACK";><b><u>CUSTOMER DETAILS</u></b></p></center></tr>
<tr style="font-size:30px; color:BLACK";><th>CUSTOMER ID</th><th>CUSTOMER NAME</th><th>GENDER</th><th>DATE OF BIRTH</th><th>ADDRESS</th><th>CONTACT NO</th></tr>
<?php
 $i=1;
do
{
?>
<tr style="font-size:30px; color:BLACK";>
<td><?php echo $rcd['customerid'];?></td>
<td><?php echo $rcd['name'];?></td>
<td><?php echo $rcd['gender'];?></td>
<td><?php echo $rcd['dob'];?></td>
<td><?php echo $rcd['address'];?></td>
<td><?php echo $rcd['contactno'];?></td>

</tr>
<?php
$i++;
}
while($rcd=mysqli_fetch_array($qry));

?></table>
</body>
</html>

