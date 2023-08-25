<?php
include "conn.php";

 $username=$_POST['username'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
        if(isset($_POST['update']))
         {
          include "conn.php";
          $qry="Update register SET  Username='$username',Password='$password',ConfirmPassword='$cpassword'  where Username='$username'";
         $retval=mysqli_query($conn,$qry);

         if(!$retval)
           die("updation not sucesfull".mysqli_error($conn));

         else
         {
            
            echo "<center><h1>Your Username & Password has been updated</center></h1>";
             include "Userlogin.html";
       }

       }

?>   