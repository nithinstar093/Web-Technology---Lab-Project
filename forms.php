<?php
  session_start();
  
  // connect to database 
  $db = mysqli_connect("localhost", "root", "", "booking");
 
  
  
  
  if (isset($_POST['submit'])){
	  
	  $username = $_POST['username'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $date = $_POST['date'];
	  $numberOfPpl = $_POST['numberOfPpl'];
	  $country = $_POST['country'];
	  
	 
	  
	  	  $sql = "insert into book(name,email,phone,date,people,country) values('$username','$email','$phone','$date','$numberOfPpl','$country')";
		  mysqli_query($db,$sql);
		  
		  $_SESSION["username"]=$username;
		  $_SESSION["email"]=$email;
		  $_SESSION["date"]=$date;
		  $_SESSION['numberOfPpl']=$numberOfPpl;
			  //echo "<script>alert('connected')</script>";
		  
		  header('Location: destination.php'); //redirect to home page
	  
		   echo "<script>alert('succesfully booked')</script>";
		  
		 
   }
  
  

?>

<!DOCTYPE html>
<html>
<head>

  <title>Book a flight</title>
  
</head>
<body background="used.jpg">

   <form action="" method="POST">
     <fieldset>
	   <legend>Personal Details: </legend>
	   <label for="name">Username: </label><input type="text" name="username" id="name" placeholder="Your username" pattern="[a-zA-Z]{3,}" title="Please enter in more than 3 letters">
	   <label for="email">Email: </label><input type="email" name="email" id="Email" placeholder="Your email" pattern="[a-zA-Z]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}" title="Please enter valid email">
	   <label for="phone">Phone: </label><input type="tel" name="phone" id="phone" placeholder="Enter your phone number" pattern="[0-9]{4,} [0-9]{3} [0-9]{3}" title="Please enter phone number in this format #### ### ###">
	   <p>Country:<select name="country" required>
	     <option value="IND">IND</option>
		 <option value="US">US</option>
		 <option value="UK">UK</option>
		 <option value="AUS">AUS</option>
	   </select></p>
	 </fieldset>
	 <br>
	 <fieldset>
	    <legend>Booking Details: </legend>
		<label for="date">Booking Date: </label><input id="date" type="date" name="date" min="2016-11-20">
		<label for="numberOfPpl">Number of People: </label><input id="numberOfPpl" type="number" name="numberOfPpl" min="1" max="3"><br><br>
		
		<label for="from">FROM: </label><input type="text" name="from" id="from" placeholder="America" pattern="[a-zA-Z]{3,}" title="Please enter in more than 3 letters">
		<label for="to">TO: </label><input type="text" name="to" id="to" placeholder="India" pattern="[a-zA-Z]{3,}" title="Please enter in more than 3 letters">
		
		<p>Do you require a hotel booking too?</p>
		<label for="yesHotel"> Yes: </label><input id="yesHotel" type="radio" name="hotel" value="yesHotel">
		<label for="noHotel"> No: </label><input id="noHotel" type="radio" name="hotel" value="noHotel">
		<br>
		
		<p>Which class u wanna travel</p>
		<label for="first"> FIRST CLASS: </label><input id="first" type="radio" name="first" value="first"><br>
		<label for="business"> BUSINESS CLASS: </label><input id="business" type="radio" name="business" value="business"><br>
		<label for="economy"> ECONOMY CLASS: </label><input id="economy" type="radio" name="economy" value="economy"><br>
		<br>
		
		<p>Do u require a window seat</p>
		<label for="windowseat">Window Seat: </label><input id="windowseat" type="checkbox" name="windowseat" value="yes" checked>
		<br>
		<br>
		<input type="submit" name="submit" >
		
	       
	 </fieldset>
     
	
   </form>
   
   
 




</body>
</html>