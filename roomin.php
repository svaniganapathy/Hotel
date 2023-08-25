<html>
<body>
<?php
 include "conn.php";
if(isset($_POST['insert']))
{
 
 $roomtype=$_POST['roomtype'];
 $facilities=$_POST['facilities'];
 $cost=$_POST['cost'];
 $image=$_POST['image'];
 
 $sql="Insert into room(roomtype,facilities,cost,image)
 values('$roomtype','$facilities','$cost','$image')";
 $retval=mysqli_query($conn,$sql);
 if(!$retval)
   die('.  '.mysqli_error($conn));
  include "viewr.php";
}

?>


  
</body>
</html>


