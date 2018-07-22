<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WT-LAB</title>
<style type="text/css">

.mySlides {display:none;}

div.container {
    width: 100%;
    border: 3px solid black;
}
header, footer {
    padding: 1em;
    color: white;
    background-image="bgpic2.jpg";
    clear: left;
    text-align: center;
}
    ul{
        padding: 0;
        list-style: none;
        background: #f2f2f2;
    }
    ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #939393;
    }
    ul li ul.dropdown{
        min-width: 100%; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
	
	nav {
    float: left;
    max-width: 150px;
    margin: 0;
    padding: 1em;
    display:block;
}

article {
    margin-left:170px;
    border-left: 2px solid black;
    padding: 1em;
    overflow: hidden;
}




</style>
</head>
<body background="mm.jpeg">




<div class="container">

<header>
   
   <marquee><h1 style="color:orange"><font size="10"><b>Welcome to Qatar Airways<b></font></h1></marquee>
    
   
</header>
    <ul>
        <li><a href="#">America &#9662;</a> 
		<ul class="dropdown">
                <li><a href="nothing.php">United States</a></li>
                <li><a href="nothing.php">Brazil</a></li>
                <li><a href="nothing.php">Argentina</a></li> 
				<li><a href="nothing.php">Mexico</a></li>
				<li><a href="nothing.php">Canada</a></li>
            </ul>
	    </li>
        <li><a href="#">Asia &#9662;</a> 
		<ul class="dropdown">
                <li><a href="3rdpage.php">India</a></li>
                <li><a href="3rdpage.php">Japan</a></li>
                <li><a href="3rdpage.php">China</a></li> 
				<li><a href="3rdpage.php">Thailand</a></li>
				<li><a href="3rdpage.php">Maldives</a></li>
            </ul>
	    </li>
		
        <li>
            <a href="#">Europe &#9662;</a>
            <ul class="dropdown">
                <li><a href="image.php">France</a></li>
                <li><a href="image.php">Germany</a></li>
                <li><a href="image.php">Italy</a></li> 
				<li><a href="image.php">Switzerland</a></li>
				<li><a href="image.php">Norway</a></li>
            </ul>
	    </li>
        <li><a href="#">Australia &#9662;</a> 
		<ul class="dropdown">
                <li><a href="uno.php">New Zealand</a></li>
                <li><a href="uno.php">Tasmania</a></li>
                <li><a href="uno.php">New Guinea</a></li> 
				<li><a href="uno.php">Perth</a></li>
				<li><a href="uno.php">Adelaide</a></li>
            </ul>
	    </li>
		
		<li><a href="about.php">About Us</a></li>
		
		<li><a href="contact.php">Contact Us</a></li>
    </ul>
	
<nav>
   <h4 style="color:orange">CHECK-IN</h4>
  <ul>
    <li><a href="register.php">BOOK A FLIGHT</a></li>
    <li><a href="goo.php">MANAGE BOOKING</a></li>
    <li><a href="goo.php">CHECK-IN ONLINE</a></li>
    <li><a href="goo.php">FLIGHT STATUS</a></li>
	<li><a href="goo.php">TIME TABLE SEARCH</a></li>
	
  </ul>
  
  

<br />

  <h4 style="color:orange">Try here</h4>
  <ul>
    <li><a href="register.php">NEW USER</a></li>
	<li><a href="goo.php">Already,a user</a></li>
	<li><a href="3rdpage.php">Offers list</a></li>
  </ul>
</nav> 

<article>
   
  
<div class="news" style="max-width:1900px">
  <img class="mySlides" src="pic1.jpg" style="width:100%" "height:250px">
  <img class="mySlides" src="pic2.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic3.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic4.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic5.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic6.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic7.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic8.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="pic9.jpg" style="width:100%"  "height:100px">
  <img class="mySlides" src="mm.jpg" style="width:100%"  "height:100px">
  </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>


</article>
 
 




<footer><a href="http://www.qatarairways.com"><b style="color:orange"><h3><center>Visit : qatarairways.com</center></h3></b></a></footer>

</div>
 

</body>
</html>