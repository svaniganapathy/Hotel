<?php
include "conn.php";

 $username=$_POST['username'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
        if(isset($_POST['update']))
         {
          include "conn.php";
          $qry="Update admin SET  loginid='$username',password='$password',confirmpassword='$cpassword'  where loginid='$username'";
         $retval=mysqli_query($conn,$qry);

         if(!$retval)
           die("updation not sucesfull".mysqli_error($conn));

         else
         {
            
            echo "<center><h1>Your Username & Password has been updated</center></h1>";
             include "adminlogin.html";
   }

         }

?>   