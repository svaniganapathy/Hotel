<?php include "employe.html";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body align=center>

   <form  method="POST" action="employeein.php" autocomplete="off">
   
        <br><br><center><h1 style="color:DarkOrange;"> ADD EMPLOYEE</h1></center>
      
     <table align=center>
     <tr align=right style="font-size:25px;"><td><b>EMPLOYEE NAME:</b><input type="text" name="employeename" required><br></td></tr>
     <tr align=right style="font-size:25px;" ><td><b>GENDER:</b><select  style="width:175px; font-size: 20px;" name="gender" required>
     <option value="Male"selected>Male</option>
     <option value="Female"selected>Female</option>
     </select autocomplete="off"><br></td></tr>
     <tr align=right style="font-size:25px;"><td><b>DATE OF BIRTH:</b><input type="date" style="width:175px; font-size: 20px;"name="dob" required><br></td></tr>
    <tr align=right style="font-size:25px;" ><td><b>QUALIFICATION:</b><select  style="width:175px; font-size: 20px;" name="qualification" required>
     <option value="BA"selected>BA</option>
     <option value="BSC"selected>BSC</option>
     </select autocomplete="off"><br></td></tr>
       <tr align=right style="font-size:25px;"><td><b>ADDRESS:</b><textarea style="width:175px;" rows="2" cols="10" name="address" required></textarea><br></td></tr>

      <tr align=right style="font-size:25px;"><td><b>PHONE NUMBER:</b><input type="text" name="contact"  maxlength="10" required><br><br></td></tr>
    

      
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="insert"value="SAVE"></td></tr>
     </table>  
    </form>
</form>
</body>
</html>