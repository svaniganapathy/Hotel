<?php
include "room.html";
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
<form action="roomupdated.php"method="POST">
<?php
	$i=1;
	do
	{
?>
<tr><center><p style="font-size:40px; color:BLACK";><b><u>UPDATE ROOM</u></b></p></center></tr>
 <table align=center><tr align=right style="font-size:25px;">
      <td><b>ROOM NUMBER:</b><input type="number"name="roomnum"value="<?php echo $retval['roomid'] ?>" required><br></td></tr>
     <tr align=right style="font-size:25px;"><td><b>ROOM TYPE:</b><select  style="width:175px; font-size: 20px;" name="roomtype"value="<?php echo $retval['roomtype'] ?>">
     <option value="Single"selected >Single</option>
     <option value="Double"selected>Double</option>
     <option value="Superior"selected>Superior</option>
     </select><br></td></tr>
       <tr align=right style="font-size:25px;"><td><b>FACILITIES:</b><select  style="width:175px; font-size: 20px;" name="facilities"value="<?php echo $retval['facilities'] ?>">
     <option value="AC"selected>AC</option>
     <option value="NON-AC"selected>NON-AC</option>
     </select><br></td></tr>
     
     <tr align=right style="font-size:25px;"><td><b>COST:</b><select  style="width:185px; font-size: 20px;" name="cost"value="<?php echo $retval['cost'] ?>">
     <option value="3000"selected >Single-AC=3000</option>
     <option value="5000"selected>Double-AC=5000</option>
     <option value="8000"selected>Superior-AC=8000</option>
     <option value="2000"selected >Single-NON-AC=2000</option>
     <option value="4000"selected>Double-NON-AC=4000</option>
     <option value="7000"selected>Superior-NON-AC=7000</option>
     </select><br></td></tr>
    <tr align=right style="font-size:25px;" > <td><b> IMAGE:</b><input type="file" name="image"  value="<?php echo $retval['image'] ?>" required><br><br><br><br></td></tr>
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="update"value="UPDATE"></td></tr>
<?php
	}while($retval=mysqli_fetch_array($qry));
    }
?>     
</table>
</form>
</body>
</html>