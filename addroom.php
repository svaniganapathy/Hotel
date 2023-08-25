<?php include"room.html";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body>
 
   <form  method="POST" action="roomin.php"  autocomplete="off"> 
     <br><br><center><h1 style="color:DarkOrange;">  ADD ROOM </h1></center>
      
     <table align=center>
     <tr align=right style="font-size:25px;"><td><b>ROOM TYPE:</b><select  style="width:175px; font-size: 20px;" name="roomtype">
     <option value="Single"selected >Single</option>
     <option value="Double"selected>Double</option>
     <option value="Superior"selected>Superior</option>
     </select><br></td></tr>
     
  
     <tr align=right style="font-size:25px;"><td><b>FACILITIES:</b><select  style="width:175px; font-size: 20px;" name="facilities">
     <option value="AC"selected>AC</option>
     <option value="NON-AC"selected>NON-AC</option>
     </select><br></td></tr>
     
     <tr align=right style="font-size:25px;"><td><b>COST:</b><select  style="width:185px; font-size: 20px;" name="cost">
     <option value="3000"selected >Single-AC=3000</option>
     <option value="5000"selected>Double-AC=5000</option>
     <option value="8000"selected>Superior-AC=8000</option>
     <option value="2000"selected >Single-NON-AC=2000</option>
     <option value="4000"selected>Double-NON-AC=4000</option>
     <option value="7000"selected>Superior-NON-AC=7000</option>
     </select><br></td></tr>
     <tr align=right style="font-size:25px;" > <td><b> IMAGE:</b><input type="file" name="image" required><br><br><br><br></td></tr>
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="insert"value="SAVE"></td></tr>
      
</table>
</form>
</body>
</html>