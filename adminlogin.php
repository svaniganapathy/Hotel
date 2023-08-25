<?php
if($_POST)

{
  include "conn.php";

 $loginid=$_POST['username'];
 $password=$_POST['password'];
  $sql = "select *from admin  where loginid = '$loginid' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
        if(($count == 1))
        {
         
          If(($loginid)==$loginid && ($password)==$password)
	  { 
        
                       include "adminpage.php";
                    echo"<h1><center><br><br>Login Success</center></h1>";
           } 
         }
        }
        else
        {  
             echo"<h1><center>Wrong username or password</center></h1><br><br><br>";
                 include "adminlogin.html";  

     }
           
                
  }     

?>