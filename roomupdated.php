<?php
include "roomt.php";
if(isset($_POST['update']))
{
 include "conn.php";
 $roomnum=$_POST['roomnum'];
 $roomtype=$_POST['roomtype'];

 $facilities=$_POST['facilities'];
 $cost=$_POST['cost'];
 $image=$_POST['image'];
 
 $qry="Update room SET  roomid='$roomnum',roomtype='$roomtype', 
 facilities='$facilities',cost='$cost',image='$image' where roomid=$roomnum";
 $retval=mysqli_query($conn,$qry);
  
  if(!$qry)
    die("Not UPDATED<br>".mysqli_error($conn));
   else
     echo "Room Updated Successfully<br>";
          include "viewr.php";
}
?>
<html><br> <a href="room.html"><b>Back</b></a> </html> 