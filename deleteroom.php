<?php include"room.html";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body>
 
   <form  method="POST" action="roomdelete.php"  autocomplete="off"> 
     <br><br><center><h1 style="color:DarkOrange;">DELETE  ROOM </h1></center>
      
     <table align=center><tr align=right style="font-size:25px;">
     <td><b>ROOM NUMBER:</b><input type="text" name="roomnum" required><br><br><br></td></tr>
     
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="delete"value="DELETE"></td></tr>
      
</table>
</form>
</body>
</html>