<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="stylee.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: PeachPuff">
<header>
<div id="mySidenav" class="sidenav">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="card.php">ROOM BOOKING</a>
  
  <a href="deleteusrbooking.php"><b>CANCEL BOOKING</b></a>  

</div>
<div class="topright">
 <a href="logout.php"><b>LOGOUT</b></a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</header> 
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
   
<br>
<center><p style="font-size:40px; color:Crimson";><br><b>WELCOME TO STAR HOTEL</b></p>
<p style="font-size:40px; color:navy">Start Relaxing and Enjoy your stay!</p></center>  
</body>
</html> 
