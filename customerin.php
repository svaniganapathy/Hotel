<?php
 
 include "conn.php";
if(isset($_POST['insert']))
{ 
 $customerid=$_POST['customerid'];
 $customername=$_POST['customername'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $address=$_POST['address'];
 $contactno=$_POST['contactno'];

 $sql="Insert into customer(customerid,customername,gender,dob,address,contactno)
values('$customerid','$customername','$gender','$dob','$address','$contactno')";
 $retval=mysqli_query($conn,$sql);
 if(!$retval)
   die('.  '.mysqli_error($conn));
 
 include "card.html";
}

?>


  
</body>
</html>


  

