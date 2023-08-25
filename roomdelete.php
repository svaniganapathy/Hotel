
<?php
	
	
	if(isset($_POST['delete']))
	 {
              include "conn.php";                
                           $roomnum=$_POST['roomnum'];
	   	

?>
		<html align=center> 
		<body>
		<table  align=center >
<?php

		do
		{
		
?>
			<tr><td><input type="text" name="roomid"   value="<?php echo $rt['roomid'];?>"hidden/></td></tr>
<?php
                                    $sql="Select * from room where roomid='$roomnum' ";
                                   $qry=mysqli_query($conn,$sql);
                                   $rcd=mysqli_fetch_array($qry);
		$rid=$rcd['roomid'];

		}while($rt=mysqli_fetch_array($qry));			
	
		
		if($rid==$roomnum)
		{
			$sql="Delete from room where roomid='$roomnum'";
			
			$retval=mysqli_query($conn,$sql);
			if(!$retval)
				 die('No data deleted'.mysqli_error($conn));
			
                                                       include"viewr.php";
                                                       echo "<br><br><b>ROOM DELETED</b>";
		}
		else
		{
			
                                                     include"deleteroom.php";
                                                     echo "<br><br><b>NO SUCH RECORD FOUND TO BE DELETED</b>";
		}
	
	
		
	 }
?>




