<?php
include "userpage.php";
include "conn.php";


 if($_POST)
{
    include"roomt.php";
   $id=$_POST['id'];
   $sql= "select * from room where roomid='$id' ";
    $qry=mysqli_query($conn,$sql);
    if(!$qry)
	die("data cannot retrieved".mysqli_error($conn));
	$retval=mysqli_fetch_array($qry);
    if(!$retval)
      die( "<center> <b>NO SUCH RECORD FOUND</b></center> ".mysqli_error($conn));

?>
 <html>
<body >
<table border=3>
<form action="bookingin.php"method="POST">
<?php
	$i=1;
	do
	{
?>
<tr><center><p style="font-size:40px; color:BLACK";><b><u>ROOM BOOOKING</u></b></p></center></tr>
 <table align=center><tr align=right style="font-size:25px;">
      <td><b>ROOM NUMBER:</b><input type="number"name="roomnum"value="<?php echo $retval['roomid'] ?>" required><br></td></tr>
     <tr align=right style="font-size:25px;"><td><b>ROOM TYPE:</b><input type="text"  style="width:175px; font-size: 20px;" name="roomtype"value="<?php echo $retval['roomtype'] ?>">
     <br></td></tr>
       <tr align=right style="font-size:25px;"><td><b>FACILITIES:</b><input type="text"  style="width:175px; font-size: 20px;" name="facilities"value="<?php echo $retval['facilities'] ?>">
   <br></td></tr>
     
     <tr align=right style="font-size:25px;"><td><b>COST:</b><input type="text" style="width:185px; font-size: 20px;" name="cost"value="<?php echo $retval['cost'] ?>">
     <br></td></tr>
      <tr align=right style="font-size:25px;"><td><b>BOOKING DATE:</b><input type="date"style="width:175px; font-size: 20px;" name="bookingdate"  min="2022-05-01" max="2022-12-31" required><br></td></tr>
     <tr align=right style="font-size:25px;"><td><b>CHECKIN DATE:</b><input type="date"style="width:175px; font-size: 20px;" name="checkindate" min="2022-05-01" max="2022-12-31" required><br></td></tr>
     <tr align=right style="font-size:25px;"><td><b>CHECKOUT DATE:</b><input type="date" style="width:175px; font-size: 20px;"name="checkoutdate" min="2022-05-01" max="2022-12-31"required><br><br><br></td></tr>
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="insert" value="BOOK"></td></tr>
<?php
	}while($retval=mysqli_fetch_array($qry));
    }
?>     
</table>
</form>
</body>
</html>