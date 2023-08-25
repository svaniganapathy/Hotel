<?php
	include "conn.php";
	
	if(isset($_POST['delete']))
	 {
                                $customer=$_POST['customerid'];
                           
	   	

?>
		<html align=center> 
		<body>
		<table  align=center >
<?php

		do
		{
		
?>
			<tr><td><input type="text" name="customerid"   value="<?php echo $rt['customerid'];?>"  hidden ></td></tr>
<?php
                                    $sql="Select * from booking where customerid='$customer' ";
                                   $qry=mysqli_query($conn,$sql);
                                   $rcd=mysqli_fetch_array($qry);
		$cid=$rcd['customerid'];

		}while($rt=mysqli_fetch_array($qry));			
	
		
		if($cid==$customer)
		{
			$sql="Delete from booking where customerid='$customer'";
			
			$retval=mysqli_query($conn,$sql);
			if(!$retval)
				 die('No data deleted'.mysqli_error($conn));
			
                                                       include"viewbooking.php";
                                                       echo "<br><br><b>BOOKING DELETED</b>";
		}
		else
		{
			
                                                     include"deletebooking.php";
                                                     echo "<br><br><b>NO SUCH RECORD FOUND</b>";
		}
	
	
		
	 }
?>



