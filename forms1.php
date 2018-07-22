<?php
  session_start();
  
  // connect to database 
  $db = mysqli_connect("localhost", "root", "", "myrailway");
 
  
  
  
  if (isset($_POST['submit'])){
	  
	  $pname = $_POST['pname'];
	  $reserve_status = $_POST['reserve_status'];
	  $pnr = $_POST['pnr'];
	  $age = $_POST['age'];
	  $gender = $_POST['gender'];
	  $seat_no = $_POST['seat_no'];
	  $p_id = $_POST['p_id'];
	  $starting_point = $_POST['starting_point'];
	  $destination_point = $_POST['destination_point'];
	 
	  
	  	  $sql = "insert into passenger(pname,reserve_status,pnr,age,gender,seat_no,p_id,starting_point,destination_point) values('$pname','$reserve_status','$pnr','$age','$gender','$seat_no','$p_id','$starting_point','$destination_point')";
		  mysqli_query($db,$sql);
		  
		  $_SESSION["pname"]=$pname;
		  $_SESSION["reserve_status"]=$reserve_status;
		  $_SESSION["pnr"]=$pnr;
		  $_SESSION['age']=$age;
		  $_SESSION['gender']=$gender;
		  $_SESSION['seat_no']=$seat_no;
		  $_SESSION['p_id']=$p_id;
		  $_SESSION['starting_point']=$starting_point;
		  $_SESSION['destination_point']=$destination_point;
			  //echo "<script>alert('connected')</script>";
		  
		  header('Location: destinationDB.php'); //redirect to home page
	  
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
	   <label for="name">Passenger name: </label><input type="text" name="pname" id="pname" placeholder="Your username"><br><br>
	   <p>Reserve Status:<select name="reserve_status" required>
	     <option value="Reserved">Reserved</option>
		 <option value="Waiting">Waiting</option>
		 <option value="Cancelled">Cancelled</option>
		 
	   </select></p><br>
	   
	   <label for="pnr">PNR: </label><input type="pnr" name="pnr" id="pnr" placeholder="Enter your passenger number"><br><br>
	   <p>Gender:<select name="gender" required>
	     <option value="M">M</option>
		 <option value="F">F</option>
		 
	   </select></p>
	 </fieldset>
	 <br><br>
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
		 
		 
	   </select></p><br>
	    
		<label for="age">Enter your age: </label><input id="age" type="age" name="age" min="1" max="100"><br><br>
		
		<label for="p_id">PID: </label><input type="p_id" name="p_id" id="p_id" placeholder="Enter your passenger identity number">
		
		
		<br>
		<br>
		<p>FROM:<select name="starting_point" required>
	     <option value="Bengaluru">Bengaluru</option>
		 <option value="Belgaum">Belgaum</option>
		 <option value="Nainital">Nainital</option>
		 <option value="Goa">Goa</option>
		 <option value="Kashmir">Kashmir</option>
		 <option value="Mysore">Mysore</option>
		 <option value="New Jersey">New Jersey</option>
		 <option value="Punjab">Punjab</option>
		 <option value="24">Sevilla</option>
		 <option value="21">Udupi</option>
		 
		 
	   </select></p><br>
	    
		<p>TO :<select name="destination_point" required>
	     <option value="Mysore">Mysore</option>
		 <option value="Bidar">Bidar</option>
		 <option value="Darjelling">Darjelling</option>
		 <option value="Mumbai">Mumbai</option>
		 <option value="Dal Lake">Dal Lake</option>
		 <option value="Hyderabad">Hyderabad</option>
		 <option value="New York">New York</option>
		 <option value="Guwahati">Guwahati</option>
		 <option value="Eibar">Eibar</option>
		 <option value="Karwar">Karwar</option>
		 
		 
		 
	   </select></p><br>
	    
		
		<input type="submit" name="submit" >
		
	       
	 </fieldset>
     
	
   </form>
   
   
 




</body>
</html>