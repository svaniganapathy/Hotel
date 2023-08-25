
<?php
	include "conn.php";
	
	if(isset($_POST['delete']))
	 {
                                $employee=$_POST['employeeid'];
                           
	   	

?>
		<html align=center> 
		<body>
		<table  align=center >
<?php

		do
		{
		
?>
			<tr><td><input type="text" name="employeeid"   value="<?php echo $rt['employeeid'];?>"  hidden ></td></tr>
<?php
                                    $sql="Select * from employee where employeeid='$employee' ";
                                   $qry=mysqli_query($conn,$sql);
                                   $rcd=mysqli_fetch_array($qry);
		$eid=$rcd['employeeid'];

		}while($rt=mysqli_fetch_array($qry));			
	
		
		if($eid==$employee)
		{
			$sql="Delete from employee where employeeid='$employee'";
			
			$retval=mysqli_query($conn,$sql);
			if(!$retval)
				 die('No data deleted'.mysqli_error($conn));
			;
                                                       include"viewemployee.php";
                                                     echo "<br><br><b>EMPLOYEE DELETED</b>";
		}
		else
		{
			
                                                     include"deleteemployee.php";
                                                     echo "<br><br><b>NO SUCH RECORD FOUND TO BE DELETED</b>";
		}
	
	
		
	 }
?>



