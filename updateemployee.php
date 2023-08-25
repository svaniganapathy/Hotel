<?php include "employe.html";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body align=center>

   <form  method="POST" action="employeeupdate.php" autocomplete="off">
      <br><br><center><h1 style="color:DarkOrange;">UPDATE  EMPLOYEE</h1></center>
      
     <table align=center><tr align=right style="font-size:25px;">
     <td><b>SEARCH FOR EMPLOYEE ID:</b><input type="number" name="id" required><br><br><br></td></tr>

     <tr align=center style="font-size:25px;"><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="search"value="SEARCH"></td></tr>
     </table>  
    </form>
</form>
</body>
</html>