<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>

  <title>Destination</title>
<style>
  img {

float:right;
} 
</style>
</head>
<body background="used.jpg">

<img src="rail_image1.png" width="200" height="200">

<div><h3>Passenger Name: <?php echo $_SESSION['pname'];?></h3></div>
 <div><h3>Reserve Status: <?php echo $_SESSION['reserve_status'];?></h3></div>
  <div><h3> PNR :  <?php echo $_SESSION['pnr'];?></h3></div>
  <div><h3> Seat NO : <?php echo $_SESSION['seat_no'];?></h3></div>
  <div><h3> FROM : <?php echo $_SESSION['starting_point'];?></h3></div>
  <div><h3> Place Going To : <?php echo $_SESSION['destination_point'];?></h3></div>
  
  <h4><p> (Please, be prior 30 minutes for Verification.)</p></h4>
  
  <br>
  <br>
 
 <div class="header">
    <h1> SUCCESFULLY BOOKED </h1>
	<h3> Thanks, for using Indian Railways</h3>
 
 </div>
 <br>
 
 
<a href="finalDBMS.php">Back to HOME</a>
</body>
</html>