<?php
 include "conn.php";
if(isset($_POST['insert']))
{
 $roomid=$_POST['roomnum'];
 $bookingdate=$_POST['bookingdate'];
 $checkindate=$_POST['checkindate'];
 $checkoutdate=$_POST['checkoutdate'];
 
 $sql="Insert into booking(roomid,bookingdate,checkindate,checkoutdate)
 values('$roomid','$bookingdate','$checkindate','$checkoutdate')";
 $retval=mysqli_query($conn,$sql);
 if(!$retval)
   die('.  '.mysqli_error($conn));
 
  
  include"payment.html";
}



?>