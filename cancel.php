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
		  
		  
			  //echo "<script>alert('connected')</script>";
		  
		  header('Location: destination.php'); //redirect to home page
	  
		   echo "<script>alert('succesfully booked')</script>";
		  
		 
   }
  
  

?>

<!DOCTYPE html>
<html>
<head>

  <title>Book a Ticket</title>
  
</head>
<body background="used.jpg">

   <form action="" method="POST">
     <fieldset>
	   <legend>Personal Details: </legend>
	   <label for="name">Which City do u Reside : </label><input type="text" name="city" id="city" placeholder="Your city"><br><br>
	   <label for="email">Email : </label><input type="email" name="email" id="email" placeholder="email"><br><br>
	   <label for="c_id">Customer  Id: </label><input type="c_id" name="c_id" id="c_id" placeholder="Enter your customer_id"><br><br>
	   <label for="message">Enter your Complaint Message : </label><input type="text" name="message" id="message" placeholder="Your message"><br><br>
	   <label for="email">Email : </label><input type="email" name="email" id="email" placeholder="email"><br><br>
	   <label for="cust_id">Customer complaint Id: </label><input type="cust_id" name="cust_id" id="cust_id" placeholder="Enter your customer_id1"><br><br>
	   
	 </fieldset>
	 <br>
	 <fieldset>
	 
	    <p>Seat No :<select name="seat_no" required>
	     <option value="10">10</option>
		 <option value="17">17</option>
		 <option value="13">13</option>
		 <option value="19">19</option>
		 <option value="26">26</option>
		 <option value="22">22</option>
		 <option value="31">31</option>
		 <option value="3">3</option>
		 <option value="24">24</option>
		 <option value="21">21</option>
		 <option value="33">33</option>
		 <option value="39">39</option>
		 <option value="38">38</option>
		 
		 
	   </select></p>
	    
		<label for="age">Enter your age: </label><input id="age" type="age" name="age" min="1" max="100"><br><br>
		
		<label for="p_id">PID: </label><input type="p_id" name="p_id" id="p_id" placeholder="Enter your passenger identity number">
		
		
		<br>
		<br>
		<input type="submit" name="submit" >
		
	       
	 </fieldset>
     
	
   </form>
   
   
 




</body>
</html>