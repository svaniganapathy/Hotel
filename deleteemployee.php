<?php include "employe.html";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body align=center>

   <form  method="POST" action="employeedelete.php" autocomplete="off">
     <br><br><center><h1 style="color:DarkOrange;">DELETE  EMPLOYEE</h1></center>
     <table align=center><tr align=right style="font-size:25px;">
     <td><b>EMPLOYEE ID:</b><input type="text" name="employeeid"><br><br><br></td></tr>
     
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="delete"value="DELETE"></td></tr>
     </table>  
    </form>
</form>
</body>
</html>