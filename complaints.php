<?php
  session_start();
  
  // connect to database 
  $db = mysqli_connect("localhost", "root", "", "myrailway");
 
  
  
  
  if (isset($_POST['submit'])){
	  
	  $city = $_POST['city'];
	  $email = $_POST['email'];
	  $c_id = $_POST['c_id'];
	  $ph_no = $_POST['ph_no'];
	  $message = $_POST['message'];
	  $cust_id = $_POST['cust_id'];
	  
	  
	 
	  
	  	  $sql = "insert into complaints(city,email,c_id,ph_no,message,cust_id) values('$city','$email','$c_id','$ph_no','$message','$cust_id')";
		  mysqli_query($db,$sql);
		  
		  $_SESSION["city"]=$city;
		  $_SESSION["email"]=$email;
		  $_SESSION["c_id"]=$c_id;
		  $_SESSION['ph_no']=$ph_no;
		  $_SESSION['message']=$message;
		  $_SESSION['cust_id']=$cust_id;
		  
		  
			  echo "<script>alert('Complaint succcesfully sent.')</script>";
		  //echo <script>alert('Complaint successfully sent.')</script>;
		  //header('Location: finalDBMS.php'); //redirect to home page
	  
		   //echo "<script>alert('succesfully booked')</script>";
		  
		 
   }
  
  

?>

<!DOCTYPE html>
<html>
<head>

  <title>Book a Ticket</title>
  
</head>
<body background="water.jpg">

   <form action="" method="POST">
     <fieldset>
	   <legend>Your Complaints Box: </legend>
	   <label for="name">Which City do u Reside : </label><input type="text" name="city" id="city" placeholder="Your city"><br><br>
	   <label for="email">Email : </label><input type="email" name="email" id="email" placeholder="email"><br><br>
	   <label for="c_id">Customer  Id: </label><input type="c_id" name="c_id" id="c_id" placeholder="Enter your customer_id"><br><br>
	   <label for="message">Enter your Complaint Message : </label><input type="text" name="message" id="message" placeholder="Your message"><br><br>
	   <label for="ph_no">Phone number : </label><input type="ph_no" name="ph_no" id="ph_no" placeholder="ph_number"><br><br>
	   <label for="cust_id">Customer complaint Id: </label><input type="cust_id" name="cust_id" id="cust_id" placeholder="Enter your customer_id1"><br><br>
	   
	 
	    
		<br>
		<br>
		<input type="submit" name="submit" >
		
	       
	 </fieldset>
     
	
   </form>
   
   
 


   <center><a href ="finalDBMS.php" >Back to Home</a></center>

</body>
</html>