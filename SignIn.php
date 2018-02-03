

<?php
	 ob_start();

?>



<?php
session_start();
$user='root';
$pass='';
$db='signup';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");




?>






<!Doctype>
<html>
 <head><title>SIGN IN</title>
 <link rel="icon" type="image/png" href="logo.png" />
    <style>
	
	
	#increase{
		width:50%;
		margin-left:40%;
	}
	
	
	
	body{
	 background-image:url(m5.jpg);
	 
	}
	


	 .style2
	    {
		font-family:helvetica;
		font-style:italic;
		font-size:60px;
		word-spacing:20px;
		text-align:center;
	    height:100px;
	    background-color:none;
		color:white;
		text-shadow:1px 1px 2px tan, 0 0 25px blue, 0 0 5px darkblue;
		position:relative;
		left:120px;
		}
	.st1 {
    position: absolute;
    top: 60px;
    right: 10px;
	font-size:20;
    width: 100px;
    height: 20px;
    
	text-shadow:0px 0px black;
}

input[type=text]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: white;
    color: black;
	border-radius:4px;
	
	}
	input[type=password]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: white;
    color: black;
	border-radius:4px;
	
	}
	input[type=text]:focus {
    background-color: skyblue;
	}
	input[type=password]:focus {
    background-color: skyblue;
	}
	input[type=submit]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: rgb(196,62,79);
    color: white;
	border-radius:4px;
	cursor:pointer;
	
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


.box{
	background-color:orange;
		color: white;
        padding: 2px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
	    border-radius:4px;
	    margin:3px;
	    cursor:pointer;
		box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		
         
}


.box:link,visited{
	background-color: #f44336;
         color: white;
          text-decoration: none;
        display: inline-block;
		cursor:pointer;
}
    



.box:hover,active {
    background-color: rgb(128,128,128);
	box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	text-decoration: none;
        display: inline-block;
}


 </style>
 <script type="text/javascript">
    function validate()
	{
	 //alert("Inside validate");
	 var email=document.SignIn.email.value;
	 var password=document.SignIn.password.value;
	 var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	 var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	 var error=[];
	 if(!ck_email.test(email))
	 {error[error.length]="Enter Your Valid Email Id";}
	 if(!ck_password.test(password))
	 {error[error.length]="Enter valid Password";}
	 if (error.length > 0) 
	 { reportErrors(error);
        return false; 
	 } 
	 else
	 return true; 
	  
	 function reportErrors(error)
	 { 
	 var msg = "Please Enter Valide Data...\n";
	 for (var i = 0; i<error.length;i++) 
	 { var numError = i + 1; msg += "\n" +numError + ". " + error[i]; }
	 alert(msg); }
	 
	}

 </script>
 
 </head>
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
<ul  style="border-radius:15px;">

  <li><a href="gold.php">Gold Coin</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Jewelery</a>
    <div class="dropdown-content">
      <a href="ring.php">Rings</a>
      <a href="earrings.php">Earrings</a>
      <a href="pendants.php">Pendants</a>
      <a href="bangles.php">Bangles</a>
  <li><a href="contactus.php">Contact Us</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="SignIn.php">Sign In</a></li>
  
  
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
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
 
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="shaping.css">

<body>
 
 <div id="bg"> <form name="SignIn" method="post" onsubmit="return validate()">
   <table id="increase" align="center">
   
  
   
   
     <tr>
	    <td style="color:white;">Email:
	 </tr>
	 <tr>
	    <td><input type="text" placeholder="Enter Your Valid Email" name="email" size="30" maxlength="30" required  >
	 </tr>
	 <tr>
	    <td style="color:white;">Password:
	 </tr>

	 <tr>
	    <td><input class="login-field login-field-password" id="demo" type="password" placeholder="Enter Your Valid Password" name="password" size="30" maxlength="30" required >
		
	 </tr>
	 <tr>
	    <td><input type="submit" name="submit_btn" value="Log In" >
	 </tr>
	 
	  <tr>
	    <td><div  style="background-color:#26CAD3;
    color: #660F57;
    padding: 2px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:4px;
	margin:3px;
	
	box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);">Don't have user Account?</div>
		<br/>
		<a href="SignUP.php" class="box">Sign Up here</a></td>
	 </tr>
	</table></div>
	 
   
	 
	 
	 </form>
	 
	 <?php
	
	 if(isset($_POST['submit_btn']))
  {
	  //echo'<script type="text/javascript"> alert("Account Created") </script>';
	  
	  $email=$_POST['email'];
	 
	  $password=$_POST['password'];
	
		  $query="select * from registration where  email='$email' and password='$password'";
		  $query_run=mysqli_query($db,$query);
		  
		  if(mysqli_num_rows($query_run)>0)
		  {
			 
			  
			  //valid
			$_SESSION['email']=$email;
			 
			  
			 header('Location: p1login.php');
			 ob_end_flush();
		  }
		  
		  else
		  {
				  echo'<script type="text/javascript"> alert("INVALID CREDENTIALS") </script>';
		  }
  }
  
	 ?>
	 
	 
	 
	 
	 
	
 </body>
 </html>