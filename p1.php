<?php


$user='root';
$pass='';
$db='signup';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");




?>


<!DOCTYPE php>
<html>
<title>SP JEWELS</title>
<link rel="icon" type="image/png" href="logo.png" />
<style>

.copyright{
background-color:#323232;

font-weight:8px;
margin-left:70px;
margin-right:70px;
text-align:justify;
font-size:20px;
word-spacing:3px;
letter-spacing:3px;
text-indent:110px;
color:white;}

body{
background-color:#D3D3D3;}

ul {
    list-style-type: none;
    
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

.dropdown-content a:hover {background-color:#F0FFF0;}

.dropdown:hover .dropdown-content {
    display: block;
	 background-color:#B0E0E0;
}
</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="slider.css">
<body>
<table>
<tr>
<td>
<a href="p1.php">
<img src="logo.png" style="border-radius:12px" >
</a>
</td ><td valign=top align=left>
<ul style="border-radius:15px;">

  <li><a href="gold.php">Gold Coin</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Jewelery</a>
    <div class="dropdown-content">
      <a href="ring.php">Rings</a>
      <a href="earrings.php">Earrings</a>
      <a href="pendants.php">Pendants</a>
      <a href="bangles.php">Bangles</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="SignIn.php">Sign In</a></li>
   <li><a href="SignUP.php">Sign UP</a></li>
  
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  
  
    </div>
  </li>
</ul>
</td>

</tr>
</table>
<div class="content " style="max-width:4000px;overflow:hidden;height:700px">
  
  <img class="mySlides fading" src="m1.jpg" style="width:100%;">
    <img class="mySlides fading" src="m3.jpg" style="width:100%;">
  <img class="mySlides fading" src="m4.jpg" style="width:100%;">
</div>


</head>




<script >
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
    setTimeout(carousel, 8000);    
}
</script>

 
 
 </head>
<div class="copyright">
        Copyright &copy; 2017 SP JEWELS MySite <br />
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All Rights Reserved</P>
        </div>
    
</body>
</html>
