
<html>
 <head>
  <title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css">
 </head>
 <body  style="background-color:lightblue;"align=center>
 
 
   <form  method="POST" action="sign.php" autocomplete="off">
     <br><br><center><h1>DETAILS</h1></center>
     <table align=center>
     <tr><td><b>NAME:</b><input type="text" name="name" ><br></td></tr>
     <tr ><td><b>GENDER:</b><select  style="width:175px; font-size: 20px;" name="gender" required >
     <option value="Male"selected>Male</option>
     <option value="Female"selected>Female</option>
     </select><br><br></td></tr>
      <tr ><td><b>DATE OF BIRTH:</b><input type="date" name="dob"  required><br><br></td></tr>
     <tr><td><b>ADDRESS:</b><textarea style="width:175px;" rows="2" cols="10" name="address" required></textarea><br><br></td></tr>
     <tr><td><b>PHONE NUMBER:</b><input type="text" name="contactno"  maxlength="10"  required ><br><br><br></td></tr>
     <tr  ><td><b>USERNAME:</b><input type="text" name="username" required><br></td></tr>
     <tr ><td><b>PASSWORD:</b><input type="password" name="password" maxlength="8" required><br></td></tr>
     <tr><td><b>CONFIRM PASSWORD:</b><input type="password" name="confirmpassword" maxlength="8"  required><br><br><br></td></tr>
     <tr align=center><td><input type="submit"style="height:50px; width:170px; font-size: 30px; background-color:DarkOrchid;" name="submit"value="REGISTER">
    
     </table>  
    </form>
</body>
</html>
