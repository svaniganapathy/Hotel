<?php
include "room.html";
include "conn.php";
$sql="Select * from room";
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
<tr><center><p style="font-size:40px; color:BLACK";><b><u>ROOM DETAILS</u></b></p></center></tr>
<tr style="font-size:30px; color:BLACK";><th>ROOM NUMBER</th><th>ROOM TYPE</th><th>FACILITIES</th><th>COST</th><th>IMAGE</th></tr>
<?php
 $i=1;
do
{
?>
<tr style="font-size:30px; color:BLACK";>
<td><?php echo $rcd['roomid'];?></td>
<td><?php echo $rcd['roomtype'];?></td>
<td><?php echo $rcd['facilities'];?></td>
<td><?php echo $rcd['cost'];?></td>
<td><img src ="<?php echo $rcd['image'];?>"width="100px"></td>
</tr>
<?php
$i++;
}
while($rcd=mysqli_fetch_array($qry));

?></table>
</body>
</html>

