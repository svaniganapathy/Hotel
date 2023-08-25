<?php include "userpage.php";?>
<html>
 <head>
  <title>Form</title>
 </head>
 <body>

   <form  method="POST" action="bookingin.php"  autocomplete="off">
     <br><br><center><h1>BOOKING DETAILS</h1></center>
     <table align=center><tr align=right>
     <tr align=right><td><b>ROOM ID:</b><input type="text" name="roomid" required><br></td></tr>
     <tr align=right><td><b>CUSTOMER ID:</b><input type="text" name="customerid" required><br></td></tr>
     <tr align=right><td><b>BOOKING DATE:</b><input type="date"style="width:175px; font-size: 20px;" name="bookingdate"  min="2022-05-01" max="2022-12-31" required><br></td></tr>
     <tr align=right><td><b>CHECKIN DATE:</b><input type="date"style="width:175px; font-size: 20px;" name="checkindate" min="2022-05-01" max="2022-12-31" required><br></td></tr>
     <tr align=right><td><b>CHECKOUT DATE:</b><input type="date" style="width:175px; font-size: 20px;"name="checkoutdate" 
        min="2022-05-01" max="2022-12-31"required><br><br><br></td></tr>
     <tr align=center><td><input type="submit"style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="insert"value="SAVE">
                                  <input type="submit"  style="height:50px; width:150px; font-size: 30px; background-color:DarkOrchid;" name="update" value="UPDATE"><br><br><br></td></tr>
     <tr align=center><td><input type="button" style="height:50px; width:150px; font-size: 30px; background-color:DarkOrange" value="BACK" onclick="history.back()"></td></tr>
     </table>  
   
</form>
</body>
</html>