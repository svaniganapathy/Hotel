<?php
include "employe.html";
include "conn.php";
$sql="Select * from employee";
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
<tr><center><p style="font-size:40px; color:BLACK";><b><u>EMPLOYEE DETAILS</u></b></p></center></tr>
<tr style="font-size:30px; color:BLACK";><th>EMPLOYEE ID</th><th>EMPLOYEE NAME</th><th>GENDER</th><th>DATE OF BIRTH</th><th>QUALIFICATION</th><th>ADDRESS</th><th>PHONENO</th></tr>
<?php
 $i=1;
do
{
?>
<tr style="font-size:30px; color:BLACK";>
<td><?php echo $rcd['employeeid'];?></td>
<td><?php echo $rcd['employeename'];?></td>
<td><?php echo $rcd['gender'];?></td>
<td><?php echo $rcd['dob'];?></td>
<td><?php echo $rcd['qualification'];?></td>
<td><?php echo $rcd['address'];?></td>
<td><?php echo $rcd['phoneno'];?></td>
</tr>
<?php
$i++;
}
while($rcd=mysqli_fetch_array($qry));

?></table>
</body>
</html>

