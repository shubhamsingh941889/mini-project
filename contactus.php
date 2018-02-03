
<html>
<head>
<title>CONTACT US</title>
<link rel="icon" type="image/png" href="logo.png" />
<body>
<style>

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

body{
background-color:#E0FFFF;}





input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #20B0A0;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:#90C830;
}

.container {
    border-radius: 5px;
    background-color: #B0C0E0;
    padding: 20px;
}
</style>



<script type="text/javascript">
   function validate()
   {
    var Fname=document.contactus.firstname.value;
	var Surname=document.contatcus.lastname.value;
	
	var chk_name=/[A-Za-z]{3,20}/;
	var chk_surname=/[A-Za-z]{3,20}/;
	var chk_email=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var chk_mno=/[0-9]{10}/;
	var chk_password=/^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	var error=[];
	if(!chk_name.test(firstname))
	{
	 error[error.length]="Enter valid name.";
	}
	if(!chk_surname.test(lastname))
	{
	 error[error.length]="Enter valid surname.";
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



<div style="margin-left:35px;margin-right:35px;text-align:justify;font-size:16px;
word-spacing:3px;letter-spacing:3px;text-indent:50px">
<h2 style="margin-top:12%"><u>CONTACT US</u></H2>
<BR/>
<p STYLE="font-family:Helvetica;font-size:20px;">CUSTOMER SERVICE
<p>Got a question? Need help? Ask us anything or give us your feedback using any of the methods below.
<br/>
<p><b>Tel: Toll-Free 1-800-539-3580<br/>
&nbsp;&nbsp;&nbsp;&nbsp;      Fax: Toll-Free 1-888-510-1219</b>
<p STYLE="font-family:Helvetica;font-size:20px;">ADDRESS
<p>1515 S I-35, Ste 200, Bandra, MUMBAI-78
<P STYLE="font-family:Helvetica;font-size:20px;">CUSTOMER SERVICE BUSINESS HOURS
<P>Monday to Friday: 9:00am - 7:00pm EST
<P>Saturday and Sunday: 10:00am - 6:00pm EST.
<P STYLE="font-family:Helvetica;font-size:20px;">HOLIDAY SCHEDULE
<p>Our offices will be closed on:
</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Labor Day: Monday, September 5th<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Veterans Day: Friday, November 11th<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanksgiving Day: Thursday, November 24th<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Christmas Day: Sunday, December 25th<br/>
<p>SEND US YOUR QUESTIONS
<p>We will get back to you in under 24 business hours.</p>
</div>
<h3><u>Contact Form</u></h3>

<div class="container"> <form name="contactus" method="post" onsubmit="return validate()">
  
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required >

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required >

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." required style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>				