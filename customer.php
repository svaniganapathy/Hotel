<?php include "userpage.php";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body>
 
 
   <form  method="POST" action="customerin.php" autocomplete="off">
     <br><br><center><h1>CUSTOMER DETAILS</h1></center>
     <table align=center><tr align=right>
     <td><b>CUSTOMER ID:</b><input type="text" name="customerid" required><br></td></tr>
     <tr align=right><td><b>CUSTOMER NAME:</b><input type="text" name="customername" required ><br></td></tr>
     <tr align=right><td><b>GENDER:</b><select  style="width:175px; font-size: 20px;" name="gender" required >
     <option value="Male"selected>Male</option>
     <option value="Female"selected>Female</option>
     </select><br></td></tr>
      <tr align=right><td><b>DATE OF BIRTH:</b><input type="date" style="width:175px; font-size: 20px;"name="dob"  required><br></td></tr>
     <tr align=right><td><b>ADDRESS:</b><textarea style="width:175px;" rows="2" cols="10" name="address" required></textarea><br></td></tr>
     <tr align=right><td><b>PHONE NUMBER:</b><input type="number" name="contactno" required ><br><br><br></td></tr>
     <tr align=right><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="insert"value="SAVE"><br><br></td></tr>
     </table>  
    </form>
</form>
</body>
</html>