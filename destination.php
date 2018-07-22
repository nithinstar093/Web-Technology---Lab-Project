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
<body background="airplane1.jpg">

<img src="Qatar.jpg" width="200" height="200">

<div><h3>USERNAME: <?php echo $_SESSION['username'];?></h3></div>
 <div><h3>EMAIL-ID : <?php echo $_SESSION['email'];?></h3></div>
  <div><h3> DATE OF YOUR FLIGHT:  <?php echo $_SESSION['date'];?></h3></div>
  <div><h3>  NUMBER OF SEATS BOOKED : <?php echo $_SESSION['numberOfPpl'];?></h3></div>
  
  <h4><p> (Please, be prior 30 minutes for verification.)</p></h4>
  
  <br>
  <br>
 
 <div class="header">
    <h1> SUCCESFULLY BOOKED </h1>
	<h3> Thanks, for using Qatar Airways</h3>
 
 </div>
 <br>
 
 
<a href="finalWt.php">Back to HOME</a>
</body>
</html>