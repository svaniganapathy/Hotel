<?php
 
 include "conn.php";
 $name=$_POST['name'];
$gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $address=$_POST['address'];
 $contactno=$_POST['contactno'];

 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['confirmpassword'];

 $check_username = mysqli_query($conn, "SELECT username FROM register where username = '$username' ");
 if(mysqli_num_rows($check_username) > 0){
     include "register.html";
    echo"<center><h1>UserName Already exists </h1></center>";
 
 }
 else{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       $sql="Insert into register(name,gender,dob,address,contactno,username,password,confirmpassword)
       values('$name','$gender','$dob','$address','$contactno','$username','$password','$confirmpassword')";
    }
 $retval=mysqli_query($conn,$sql);
 if(!$retval)
   die('.  '.mysqli_error($conn));

 else
    include "register.html";
   echo"<center><h1>You have Sucessfully Registered</h1></center>";
}
?>
   
 
 