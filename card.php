<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="card.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:PeachPuff">
<form  method="POST" action="searchroom.php" autocomplete="off">
<h1 style="text-align:center">BOOKING CARD</h1>
<div class="row">

<?php
include "conn.php";
$sql="Select * from room";
$qry=mysqli_query($conn,$sql);
if(!$qry)
 die("data cannot bereceived".mysqli_error($conn));
$rcd=mysqli_fetch_array($qry);
if(!$rcd)
 die("No records found".mysqli_error($conn));
?>

<?php
 $i=1;
do
{
?>

<div class="column">
 <div class="card">
<img src ="<?php echo $rcd['image']; ?>" style="width:100%;  height:300;">

<tr style="font-size:80px; color:BLACK";>
<tr><?php echo $rcd['roomid'];?><br><br></tr>
<tr><?php echo $rcd['roomtype'];?><br><br></tr>
<tr><?php echo $rcd['facilities'];?><br><br></tr>
<tr><?php echo $rcd['cost'];?><br><br></tr>
<p><button>BOOK ROOM</button></p>
</tr>
</div>
  </div> 

<?php
$i++;
}
while($rcd=mysqli_fetch_array($qry));

?>

</div>



  


</body>
</html>

