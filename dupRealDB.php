<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Show Hide Dropdown Using CSS</title>
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
                <li><a href="#">France</a></li>
                <li><a href="#">Germany</a></li>
                <li><a href="#">Italy</a></li> 
				<li><a href="#">Switzerland</a></li>
				<li><a href="#">Norway</a></li>
            </ul>
	    </li>
        <li><a href="#">Australia &#9662;</a> 
		<ul class="dropdown">
                <li><a href="#">New Zealand</a></li>
                <li><a href="#">Tasmania</a></li>
                <li><a href="#">New Guinea</a></li> 
				<li><a href="#">Perth</a></li>
				<li><a href="#">Adelaide</a></li>
            </ul>
	    </li>
		<li><a href="#">International &#9662;</a> 
		<ul class="dropdown">
                <li><a href="#">Belgium</a></li>
                <li><a href="#">Denmark</a></li>
                <li><a href="#">Iceland</a></li> 
				<li><a href="#">Portugal</a></li>
				<li><a href="#">Greece</a></li>
            </ul>
	    </li>
		<li><a href="about.php">About Us</a></li>
    </ul>
	
	
<nav>
   <h4 style="color:orange">CHECK-IN</h4>
  <ul>
    <li><a href="register.php">BOOK A FLIGHT</a></li>
    <li><a href="goo.php">MANAGE BOOKING</a></li>
    <li><a href="goo.php">CHECK-IN ONLINE</a></li>
    <li><a href="goo.php">FLIGHT STATUS</a></li>
	
	
  </ul>
  
  

<br />

  <h4 style="color:orange">TYPE</h4>
  <ul>
    <li><a href="register.php">FIRST CLASS</a></li>
	<li><a href="register.php">BUSINESS CLASS</a></li>
	<li><a href="register.php">ECONOMY CLASS</a></li>
  </ul>
</nav> 

<article>
   
  
<div class="w3-content w3-section" style="max-width:1900px">
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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</article>
 
 




<footer><a href="ss.com"><b style="color:orange"><h3><center>Visit : qatarairways.com</center></h3></b></a></footer>

</div>
 

</body>
</html>