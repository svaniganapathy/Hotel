<?php
 include "conn.php";
    $username = $_POST['username'];  
    $password = $_POST['password']; 
      
        $sql = "select *from register  where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);
        if ($row = mysqli_fetch_assoc($result))
        {
        if(($count == 1))
        {
         
          If(($username)==$username && ($password)==$password)
	  { 
            include "userpage.php";
            echo "<h1><br><br><br><center> Login successful </center></h1>";
                  
           } 
         }
        }
        else
        {  
            include "register.html";
            echo "<h1> <br><br><br><center>Login failed. Invalid username or password.</center></h1>"; 
                
          }     
?>  
