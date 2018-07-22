<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DBMS-LAB</title>
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
   
   <marquee><h1 style="color:orange"><font size="15"><b>Welcome to Indian Railways<b></font></h1></marquee>
</header>
    <ul>
        <li><a href="#">Karnataka &#9662;</a> 
		<ul class="dropdown">
                <li><a href="nothingrail.php">Bengaluru</a></li>
                <li><a href="nothingrail.php">Mysore</a></li>
                <li><a href="nothingrail.php">Mangalore</a></li> 
				<li><a href="nothingrail.php">Chikmagalur</a></li>
				<li><a href="nothingrail.php">Coorg</a></li>
            </ul>
	    </li>
        <li><a href="#">Jammu and Kashmir &#9662;</a> 
		<ul class="dropdown">
                <li><a href="3rdrail.php">Dal lake</a></li>
                <li><a href="3rdrail.php">Ladakh</a></li>
                <li><a href="3rdrail.php">Bahu fort</a></li> 
				<li><a href="3rdrail.php">Pangang so</a></li>
				<li><a href="3rdrail.php">Chemrey Monestry</a></li>
            </ul>
	    </li>
		
        <li>
            <a href="#">Mumbai &#9662;</a>
            <ul class="dropdown">
                <li><a href="imagerail.php">Gateway of India</a></li>
                <li><a href="imagerail.php">Elephanta caves</a></li>
                <li><a href="imagerail.php">Canheri Caves</a></li> 
				<li><a href="imagerail.php">Essaen World</a></li>
				<li><a href="imagerail.php">Babulnath</a></li>
            </ul>
	    </li>
        <li><a href="#">Himachal Pradesh &#9662;</a> 
		<ul class="dropdown">
                <li><a href="unorail.php">Rohtag Pass</a></li>
                <li><a href="unorail.php">Solang valley</a></li>
                <li><a href="unorail.php">Dhauladhar</a></li> 
				<li><a href="unorail.php">Khajjiar Lake</a></li>
				<li><a href="unorail.php">Spiti Valley</a></li>
            </ul>
	    </li>
		
		<li><a href="about.php">About Us</a></li>
		
		
    </ul>
	
<nav>
   <h4 style="color:orange">CHECK-IN</h4>
  <ul>
    <li><a href="registerail.php">BOOK A TICKET</a></li>
	<li><a href="trying.php">TRAIN DETAILS</a></li>
	<li><a href="station_avail.php">STATION INFO</a></li>
	<li><a href="goorail2.php">CANCEL</a></li>
    <li><a href="goorail.php">COMPLAINTS</a></li>
    
</ul>
  
  

<br />

  <h4 style="color:orange">TRY HERE</h4>
  <ul>
    <li><a href="route_rail.php">ROUTE INFO</a></li>
    <li><a href="registerail.php">NEW USER</a></li>
	<li><a href="goorail.php">Already,a USER</a></li>
	<li><a href="3rdrail1.php">OFFERS LIST</a></li>
  </ul>
</nav> 

<article>
   
  
<div class="news" style="max-width:1900px">
  
  <img class="mySlides" src="rail_image4.jpg" style="width:100%"  "height:100px">
 
  
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
 
 




<footer><a href="http://www.indianrailways.com"><b style="color:orange"><h3><center>Visit :indianrailways.com</center></h3></b></a></footer>

</div>
 

</body>
</html>