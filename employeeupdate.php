<?php
include "employe.html"; 
  
  if($_POST)
{
    include"employeet.php";
    $id=$_POST['id'];
   $sql= "select * from employee where employeeid='$id' ";
    $qry=mysqli_query($conn,$sql);
    if(!$qry)
	die("data cannot retrieved".mysqli_error($conn));
	$retval=mysqli_fetch_array($qry);
    if(!$retval)
      die( "<center><b>NO SUCH RECORDS FOUND</b> </center>".mysqli_error($conn));
?>
<html>
<body >
<table border=3>
<form action="employeeupdated.php"method="POST">
<?php
	$i=1;
	do
	{
?>
<tr><center><p style="font-size:40px; color:BLACK";><b><u>UPDATE EMPLOYEE </u></b></p></center></tr>
 <table align=center><tr align=right style="font-size:25px;">
<tr align=right style="font-size:25px;"><td><b>EMPLOYEE ID:</b><input type="number" name="id" value="<?php echo $retval['employeeid'] ?>"><br></td></tr>
     <tr align=right style="font-size:25px;"><td><b>EMPLOYEE  NAME:</b>
          <input type="text" name="name" value="<?php echo $retval['employeename'] ?>"><br></td></tr>
    
        <tr align=right style="font-size:25px;"><td><b>GENDER</b><select  style="width:175px; font-size: 20px;" name="gender" value="<?php echo $retval['gender'] ?>">
     <option value="Male"selected>Male</option>
     <option value="Female"selected>Female</option>
     </select><br></td></tr>
        <tr align=right style="font-size:25px;"><td><b>DATE OF BIRTH:</b>
          <input type="date" style="width:175px; ; font-size: 20px;" name="dob" value="<?php echo $retval['dob'] ?>"><br></td></tr>
         <tr align=right style="font-size:25px;"><td><b>QUALIFICATION</b><select  style="width:175px; font-size: 20px;" name="qualification" value="<?php echo $retval['qualification'] ?>">
     <option value="BA"selected>BA</option>
     <option value="BSc"selected>BSc</option>
     </select><br></td></tr>
      <tr align=right style="font-size:25px;"><td><b>ADDRESS:</b>
           <input type="text"   style="width:175px;" name="address"  value="<?php echo $retval['address'] ?>" ></td></tr>
          <tr align=right style="font-size:25px;"><td><b>PHONE NUMBER:</b>  
             <input type="number" name="phoneno" value="<?php echo $retval['phoneno'] ?>"><br><br><br></td></tr>
 

     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="update" value="UPDATE"></td></tr>
<?php
	}while($retval=mysqli_fetch_array($qry));
    }
?>
</table>
</body>
</html>
