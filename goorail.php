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
		   header('Location: complaints.php');    
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
<style>
body{
	margin: 0 auto;
	background-image: url("nnn.jpg"); 
	background-repeat: no-repeat;
	background-size: 100% 720px;
}


  .container{
	width: 500px;
	height: 400px;
	text-align: center;
	background-color: rgba(52, 73, 94, 0.7);
	border-radius:4px;
	margin: 0 auto;
	margin-top:150px;
	
	
}

.container img{
	width:120px;
	height: 120px;
	margin-top: -60px;
	margin-right: 30px;
	margin-bottom: 30px;
	
}

input[type="text"],input[type="password"]{
	height:45px;
	width:300px;
	font-size:18px;
	border:none;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
	
}

.form-input::before{
	content:"\f007";
	position: absolute;
	font-family: "FontAwesome";
	color:#9B59B6;
	padding-left:5px;
	padding-top:5px;
	font-size:30px;
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn Login{
	padding: 15px 30px;
	cursor: pointer;
	color: #fff;
	border-radius: 4px;
	border: none;
	background-color: #2ECC71;
	border-bottom: 4px solid #27AE60;
	margin-botton: 20px;
}

a{
	color:#fff;
}
</style>

  <title></title>
  <!--<link rel="stylesheet" type="text/css" href="style1.css"> -->
  <link rel="stylesheet" type="text/css" href="font-awesome.css"> 
</head>
<body background='rail4.png'>
<div class ="container">
  <img src="rail.jpg">
  
   <form  method="POST" action="goorail.php">
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