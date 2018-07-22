<?php
  
	$host="localhost";
	$user="root";
	$pass="";
	$db="myrailway";
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
	if(isset($_POST['u_id']))
	{   
		$u_id=$_POST['u_id'];
		$password=$_POST['password'];
		$sql= "SELECT * FROM user WHERE u_id='".$u_id."'AND password='".$password."'LIMIT 1";
		$res=mysql_query($sql);
		if(mysql_num_rows($res)==1)
		{
		   header('Location: forms1.php');    
           exit();
		}else
		{
			echo "<script> alert('invalid login')</script>";
			
		}
	}
?>
<!DOCTYPE html>
<html>
<head>

  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.css">
</head>
<body>
<div class ="container">
  <img src="Qatar.jpg">
  
   <form  method="POST" action="already.php">
     <div class="form-input">
	   <input type="text" name="u_id" placeholder="Enter User ID" >
	 </div>
	 
	 <div class="form-input">
	   <input type="password" name="password" placeholder="Enter password">
	 </div>
	 
	<input type="submit" name="submit" >
	 
	
   </form>
   

   
 




</body>
</html>