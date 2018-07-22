<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("trans.jpg");
    background-color: #cccccc;
}

div.img {
    border: 1px solid #ccc;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
h2{
  text-shadow: 2px 2px #FF0000;
  font-size: 5.2em;
}
</style>
</head>
<body>
<a href="finalDBMS.php" style="text-decoration: none">
                        <strong>Back to Home</strong>
                    </a>

<center><h2>Places to visit in Jammu and Kashmir</h2></center>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="img_fjords.jpg">
      <img src="dal.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Dal Lake </div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="img_forest.jpg">
      <img src="muss.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Mushoori</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img_lights.jpg">
      <img src="salt.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Salt Lake </div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img_mountains.jpg">
      <img src="ladak.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Ladakh  </div>
  </div>
</div>

<div class="clearfix"></div>


</body>
</html>

