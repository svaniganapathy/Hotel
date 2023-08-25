<?php
 include "conn.php";
if(isset($_POST['insert']))
{
 $employeename=$_POST['employeename'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $qualification=$_POST['qualification'];
 $address=$_POST['address'];
 $contactno=$_POST['contact'];

 $sql="Insert into employee(employeename,gender,dob,qualification,address,phoneno)
 values('$employeename','$gender','$dob','$qualification','$address','$contactno')";
 $retval=mysqli_query($conn,$sql);
 if(!$retval)
   die('.  '.mysqli_error($conn));

 include "viewemployee.php";
}


?>
</body>
</html>



