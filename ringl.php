
<?php
session_start();

$user='root';
$pass='';
$db='signup';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");




?>



<html>
<head>
<TITLE>RINGS</TITLE>
<link rel="icon" type="image/png" href="logo.png" />
<style>


body{
background-color:#E0E8F0;}


.image-zoom-container {
	list-style: none;
	font-size: 0px;
	MARGIN-BOTTOM:20PX;
}
.zoom-container {
	position: relative;
	overflow: hidden;
	display: inline-block;
	width: 33.33%;
	font-size: 16px;
	font-size: 1rem;
	border: 1px solid #fff;
	vertical-align: top;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	background-color:gray;
}
.zoom-container img {
	display: block;
	width: 100%;
	height: auto;
	-webkit-transition: all .5s ease; /* Safari and Chrome */
        -moz-transition: all .5s ease; /* Firefox */
        
        transition: all .5s ease;
}
.zoom-container .zoom-caption {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	z-index: 10;
	background: rgba(0, 0, 0, .1);
	-webkit-transition: all .5s ease; /* Safari and Chrome */
        -moz-transition: all .5s ease; /* Firefox */
        
        transition: all .5s ease;
}

.zoom-container:hover img {
	-webkit-transform:scale(1.25); /* Safari and Chrome */
        -moz-transform:scale(1.25); /* Firefox */
       
         transform:scale(1.25);
}
.zoom-container:hover .zoom-caption {
	background: none;
}
.zoom-container .zoom-caption img{height: 20px;
width: 18px;


}
.zoom-container .zoom-caption table {
	di
	text-align:
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 1em;
	font-weight: 900;
	letter-spacing: -1px;
	background-color:gray;
	color: #fff;
	margin: 77% 0 0;
	padding: 1px 0;
	border-top: 5px solid rgba(255, 255, 255, .15);
	border-bottom: 5px solid rgba(255, 255, 255, .15);
}
 
@media (max-width: 767px) {
	.zoom-container {
		width: 50%;
	}
}
 
@media (max-width: 480px) {
	.zoom-container {
		width: 100%;
	}
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #F0FFF0}

.dropdown:hover .dropdown-content {
    display: block;
	background-color:#B0E0E0;
}



</style>


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="slider.css">
<body>

<table>
<tr>
<td>
<a href="p1login.php">
<img src="logo.png" style="border-radius:12px" >
</a>
</td ><td valign=top align=left>
<ul style="border-radius:15px;">

  <li><a href="goldl.php">Gold Coin</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Jewelery</a>
    <div class="dropdown-content">
     <a href="ringl.php">Rings</a>
      <a href="earringsl.php">Earrings</a>
      <a href="pendantsl.php">Pendants</a>
      <a href="banglesl.php">Bangles</a>
  <li><a href="contactl.php">Contact Us</a></li>
  <li><a href="aboutl.php">About Us</a></li>
  <li><a href="p1.php">Sign Out</a></li>
  
   <li><a href="track.php">Your Orders</li>
  
   <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
 <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  
  
   <li style="display: inline-block;
    color:#FF4500;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	cursor:none;">
	Hi,<?php
 
  $sql= mysqli_query($db, "SELECT fname, email FROM registration where email='" . $_SESSION['email']."'");

$row=mysqli_fetch_array($sql);
  echo  $row['fname'];
  ?></li>
  
  
  
    </div>
  </li>
</ul>
</td>

</tr>
</table>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="text.css">

<h1><center>JEWELLERY</center></h1>
<br/><br/><br/>
<h3><u>PRODUCT</u>:Rings</h3><br><br>
<div class="image-zoom-container">
	<div class="zoom-container">
		<a href="r1.php">
<span class="zoom-caption">
			<h3><table><tr><td><img src=r.jpg><td>18500.00</tr></table></h3>	
			</span>
			
			<img src="irings/m6.jpg" />
		</a>
	</div>
	<!--/.zoom-container-->
	<div class="zoom-container">
		<a href="r2.php">
			<span class="zoom-caption">
			<h3><table><tr><td><img src=r.jpg><td>14000.00</tr></table></h3>	
				
			</span>
			<img src="irings/m7.jpg" />
		</a>
	</div>
	<!--/.zoom-container-->
	<div class="zoom-container">
		<a href="r3.php">
			<span class="zoom-caption">
		<h3><table><tr><td><img src=r.jpg><td>23000.00</tr></table></h3>	
					
			</span>
			<img src="irings/m8.jpg" />
		</a>
	</div>
<div class="zoom-container">
		<a href="r4.php">
			<span class="zoom-caption">
		<h3><table><tr><td><img src=r.jpg><td>12340.00</tr></table></h3>	
					
			</span>
			<img src="irings/m9.jpg" />
		</a>
	</div>
	<!--/.zoom-container-->
	<div class="zoom-container">
		<a href="r5.php">
			<span class="zoom-caption">
		<h3><table><tr><td><img src=r.jpg><td>21000.00</tr></table></h3>	
					
			</span>
			<img src="irings/m10.jpg" />
		</a>
	</div>
	<!--/.zoom-container-->
	<div class="zoom-container">
		<a href="r6.php">
			<span class="zoom-caption">
		<h3><table><tr><td><img src=r.jpg><td>11500.00</tr></table></h3>	
				
			</span>
			<img src="irings/m11.jpg" />
		</a>
	</div>

	<!--/.zoom-container-->
	...
</div>
<!--/.image-zoom-container-->
</body>
</html>