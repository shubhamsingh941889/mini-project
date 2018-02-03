
<?php
session_start();

$user='root';
$pass='';
$db='signup';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");




?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABOUT US</title>
	<link rel="icon" type="image/png" href="logo.png" />
	</head>
	<style>
	
	body{
	background-color:#F0FFF0;}
	
	
	.slider {
  max-width: 500px;
  height: 200px;
  margin: 20px auto;
  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slide1 {
  background: url("s1.jpg")no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url("s2.jpg")no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url("s3.jpg")no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
	

.copyright{
background-color: gray;;
font-size:15px;
font-weight:8px;}



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


<h3 style="text-align:center;font-size:60px"><u>About Us</u></h3>
<p style="margin-left:70px;margin-right:70px;text-align:justify;font-size:25px;
word-spacing:3px;letter-spacing:3px;text-indent:110px">
SP JEWELS is owned by Mr.Shubham Singh and his Co-Partner Mr.Pratik Singhi since 2015. 
Their moto is that they want be "THE BEST FROM THE REST".Excellent customer service has been the secret to the success of their work.
 You can have confidence that the highest standards of service and integrity will be maintained in our dealings with you.
 </p><br/>
<p style="margin-left:70px;margin-right:70px;text-align:justify;font-size:25px;
word-spacing:3px;letter-spacing:3px;text-indent:110px">
Our aim is to create timeless costume jewellery which is both feminine and sophisticated with a nod to fashion.
Each piece is made from the highest quality brass or mixed metals.
 Many of our items are silver and gold plated.
 Each piece is both lead and nickel free which means it will not cause allergies or discolouration to the skin.
 </p><br/>
 
 <div class='slider'>
  <div class='slide1'></div>
  <div class='slide2'></div>
  <div class='slide3'></div>
</div>

<p style="margin-left:70px;margin-right:70px;text-align:justify;font-size:25px;
word-spacing:3px;letter-spacing:3px;text-indent:110px">
The SP JEWELS brand is already retailed in some of the India's best boutiques and has enjoyed success in its early days.
 Please contact us for information about our stockists.
 If you would like to enquire about becoming a stockist please contact us and we will be happy to help.
 </p><br/>
 <p style="margin-left:70px;margin-right:70px;text-align:justify;font-size:25px;
word-spacing:3px;letter-spacing:3px;text-indent:110px">
We hope you enjoy shopping on our new e-commerce site and thank you for visiting SPJEWELS.com<br/><br/>

With love,
<br/><br/>
SP JEWELS
</p><br/>
</body>
</html>