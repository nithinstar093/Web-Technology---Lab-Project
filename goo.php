<?php
  
	$host="localhost";
	$user="root";
	$pass="";
	$db="profile";
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
	if(isset($_POST['username']))
	{   
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql= "SELECT * FROM user56 WHERE username='".$username."'AND password='".$password."'LIMIT 1";
		$res=mysql_query($sql);
		if(mysql_num_rows($res)==1)
		{
		   header('Location: forms.php');    
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
  
   <form  method="POST" action="goo.php">
     <div class="form-input">
	   <input type="text" name="username" placeholder="Enter Username" pattern="[a-zA-Z]{3,}" >
	 </div>
	 
	 <div class="form-input">
	   <input type="password" name="password" placeholder="Enter password" required>
	 </div>
	 
	<input type="submit" name="submit" >
	 
	
   </form>
   

   
 




</body>
</html>