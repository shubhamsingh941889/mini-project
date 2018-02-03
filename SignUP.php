
<?php
$user='root';
$pass='';
$db='signup';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");




?>



<!Doctype>
<html>
 <head><title>SIGN UP</title>
 <link rel="icon" type="image/png" href="logo.png" />
 <style>
 
 
    body{
	 background-image:url(backg.jpg);
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

	
    input[type=text]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color:#ecf0f1;
    color: white;
	border-radius:4px;
	
	}
	input[type=password]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #ecf0f1;
    color: white;
	border-radius:4px;
	
	}
	input[type=submit]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #8e44ad;
    color: white;
	border-radius:4px;
	
	}
	select
	{
	 width: 100%;
	 padding: 16px 20px;
	 border:node;
	 border-radius:4px;
	 background-color: #ecf0f1;
	}
    div.style2
	    {
		font-family:serif;
		font-style:italic;
		font-size:50px;
		word-spacing:20px;
		text-align:center;
	    height:80px;
	    background-color:white;
		color:white;
		text-shadow:1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
		}
	div.st1 {
    position: absolute;
    top: 60px;
    right: 0;
	font-size:20;
    width: 100px;
    height: 20px;
    
	text-shadow:0px 0px black;
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
background-color:#B0E0E0;}






 </style>
 <script type="text/javascript">
   function validate()
   {
    var Fname=document.SignUP.fname.value;
	var Surname=document.SignUP.surname.value;
	var Email=document.SignUP.email.value;
	var Mno=document.SignUP.mno.value;
	var Password=document.SignUP.password.value;
	var chk_name=/[A-Za-z]{3,20}/;
	var chk_surname=/[A-Za-z]{3,20}/;
	var chk_email=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var chk_mno=/[0-9]{10}/;
	var chk_password=/^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	var error=[];
	if(!chk_name.test(Fname))
	{
	 error[error.length]="Enter valid name.";
	}
	if(!chk_surname.test(Surname))
	{
	 error[error.length]="Enter valid surname.";
	}
	if(!chk_email.test(Email))
	{
	 error[error.length]="Enter valid Email Id.";
	}
	if(!chk_mno.test(Mno))
	{
	 error[error.length]="Enter Valid Phone No.";
	}
	if(!chk_password.test(Password))
	{
	 error[error.length]="Enter valid Password.";
	}
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
 <body>




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


 
 <div id="style1"> <form name="SignUP" method="post" ation="SignUP.php" onsubmit="return validate()">
   <table align="center">
 
 <tr>
  <td colspan="2"><input type="text" name="fname" placeholder="Enter Your First Name" size="30" maxlength="30" required style="color:black;">
  <td colspan="2"><input type="text" name="surname" placeholder="Enter Your Surnmae" size="30" maxlength="30" required style="color:black;">
 </tr>
 <tr>
  <td colspan="4"><input type="text" name="email" placeholder="Enter Your Email" size="30" maxlength="30" required style="color:black;">
 </tr>
 <tr>
  <td colspan="4"><input type="text" name="mno" placeholder="Enter Your 10 Digit Mobile Number" size="10" maxlength="10" required style="color:black;">
 </tr>
 <tr>
  <td colspan="4"><input type="password" name="password" placeholder="Enter Your  Password" size="30" maxlength="30" required  style="color:black;">
 </tr>
 
 <tr>
  <td colspan="4"><input type="password" name="cpassword" placeholder="Confirm Your  Password" size="30" maxlength="30" required style="color:black;">
 </tr>
 
 <tr><td><select id="day_start" 
          name="day_start" /> 
    <option>DAY</option>
    <option>1</option>       
    <option>2</option>       
    <option>3</option>       
    <option>4</option>       
    <option>5</option>       
    <option>6</option>       
    <option>7</option>       
    <option>8</option>       
    <option>9</option>       
    <option>10</option>       
    <option>11</option>       
    <option>12</option>       
    <option>13</option>       
    <option>14</option>       
    <option>15</option>       
    <option>16</option>       
    <option>17</option>       
    <option>18</option>       
    <option>19</option>       
    <option>20</option>       
    <option>21</option>       
    <option>22</option>       
    <option>23</option>       
    <option>24</option>       
    <option>25</option>       
    <option>26</option>       
    <option>27</option>       
    <option>28</option>       
    <option>29</option>       
    <option>30</option>       
    <option>31</option>       
  </select>
   <td><select id="month" 
          name="month_start" />
    <option>Month</option>		  
    <option>January</option>       
    <option>February</option>       
    <option>March</option>       
    <option>April</option>       
    <option>May</option>       
    <option>June</option>       
    <option>July</option>       
    <option>August</option>       
    <option>September</option>       
    <option>October</option>       
    <option>November</option>       
    <option>December</option>       
  </select>
 
 <td><select id="year_start" 
         name="year_start" /> 
	<option>Year</option>
    <option>1992</option>       
    <option>1993</option>       
    <option>1994</option>       
    <option>1995</option>       
    <option>1996</option>       
    <option>1997</option>       
    <option>1998</option>       
    <option>1999</option>       
    <option>2000</option>       
    <option>2001</option>       
  </select>
 
 </tr>
 <tr >
  <td style="color:#000000;font-size:30px;font-weight:30px;border-radius:13px"><input type="radio" name="gender" value="male"><b>Male</B>
  <td style="color:#000000;font-size:30px;font-weight:30px;border-radius:13px"><input type="radio" name="gender" value="female"><b>Female</b>
 </tr>
 <tr>
   <td align="center"><input type="submit" name="submit"value="Create Account" >
   
 </tr>
 
  <tr>
   <td align="center"><a href="SignIn.php" class="box">Back To Sign In</a></td>
   
 </tr>
 
 
</table>

  
  </form>
  
  <?php
  if(isset($_POST['submit']))
  {
	  //echo'<script type="text/javascript"> alert("Account Created") </script>';
	  $fname=$_POST['fname'];
	  $surname=$_POST['surname'];
	  $email=$_POST['email'];
	  $mno=$_POST['mno'];
	  $password=$_POST['password'];
	  $cpassword=$_POST['cpassword'];
	   $gender=$_POST['gender'];
	  if($password==$cpassword)
	  {
		  $query="select * from registration where  email='$email'";
		  $query_run=mysqli_query($db,$query);
		  
		  if(mysqli_num_rows($query_run)>0)
		  {
			  //there is already a user
			  echo'<script type="text/javascript"> alert("USER ALREADY EXISTS") </script>';
		  }
		  else
		  {
			  $query="insert into registration values('$fname','$surname','$email','$mno','$password','$gender')";
			  $query_run=mysqli_query($db,$query);
			  
			  if($query_run)
			  {
				  echo'<script type="text/javascript"> alert("USER REGISTERED!!GO BACK TO SIGN IN") </script>';
			  }
			  else
			  {
				  echo'<script type="text/javascript"> alert("ERROR") </script>';
			  }
		  }
		  
		  
	  }
	  else
	  {
		   echo'<script type="text/javascript"> alert("PASSWORD NOT MATCH") </script>';
	  }
	  
	
  }
  
  
  ?>
  
  
  </div>
 
 </body>
</html>