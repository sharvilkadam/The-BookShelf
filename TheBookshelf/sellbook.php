<?php
//session_start();
include('session.php');
?>

<!DOCTYPE html>
  
<head>
<meta name="keywords" content="">
<title>The BOOKSHELF</title>
<link rel="stylesheet" href="nav2.css"></link>
<link rel="stylesheet" href="slider.css"></link>
<link rel="stylesheet" href="login.css"></link>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="custom.js"></script>
<script type="text/javascript" src="jquery.sticky.js"></script>
<script type="text/javascript" src="jquery_validate.js"></script>

<script>
    $(window).load(function(){
      $(".back").sticky({ topSpacing: 0 });
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#myform").validate({
rules:
{
bookname:"required",
category:"required",
author:"required",
description:{
	required:true,
	maxlength:100
	},
Photo:"required"
},
messages:
	{
	bookname:"Enter the book's name",
	author:"Please enter the Author's name",
	category:"Select an option",
	description:"Reviews Please!(Less than 100 characters)",
	Photo:"PLEASE add a photo of your Book"
}
});
});
</script>
<style type="text/css">

.logout{
font-family:'Tempus sans ITC'; 
background: #AC2828;
background: linear-gradient(top, #AC2828 0%, #A31010 100%);
background: -moz-linear-gradient(top, #AC2828 0%, #A31010 100%);
background: -webkit-linear-gradient(top, #AC2828 0%,#A31010 100%);
color: white;
letter-spacing: 1px;
word-spacing: 1px;
box-shadow: 0px 0px 8px #A31010;
font-weight: bold;
border: 2px groove;
border-radius: 10px;
font-size:14px;
padding:3px;
text-decoration:none;
position:absolute;
top:3px;
right:33px;
}
.viewprofile{
font-family:'Tempus sans ITC'; 
background: #AC2828;
background: linear-gradient(top, #AC2828 0%, #A31010 100%);
background: -moz-linear-gradient(top, #AC2828 0%, #A31010 100%);
background: -webkit-linear-gradient(top, #AC2828 0%,#A31010 100%);
color: white;
letter-spacing: 1px;
word-spacing: 1px;
box-shadow: 0px 0px 8px #A31010;
font-weight: bold;
border: 2px groove;
border-radius: 10px;
font-size:14px;
padding:3px;
text-decoration:none;
position:absolute;
top:3px;
right:117px;
}

.logout:hover,.viewprofile:hover{
	background: #4b545f;
  background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
  background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
  background: -webkit-linear-gradient(top, #811919 0%,#680000 40%);
  }
  

.back{
width: 100%;
height: 35px;
margin-bottom: 0px;
postion: absolute;
background: linear-gradient(top, silver, white, silver);
background: -moz-linear-gradient(top, #8a8585, #c2b097, #8a8585);
background: -webkit-linear-gradient(top, silver, white, silver);

border-bottom-style: groove;
border-color: #d2edbe;
border-width: 0.5px;
top: 0px;
left: 0px;
z-index: 999999;
}

.welcome{
	position:relative;
	top:5px;
	margin-left:10px;
	font-family:'Tempus sans ITC';
	font-size:17px;
	font-weight: bold;
	text-decoration:none;
	color:black;
}
</style>
 
<style>
.booksell{ 
color:black;
margin-left:29%; 
margin-top:-23%;
margin-bottom:5%;
}

.bookselling{ margin-left:3%; margin-top:2%;}

.error {
   color: red;
   font-size: 12px;
}

.reset, .upload, .submit {
margin-left: 50px;
margin-top: 20px;
font-family:'Tempus sans ITC'; 
background: -moz-linear-gradient(#d4b78f,#ecdcb7);
text-transform: uppercase;
font-weight: bold;
box-shadow: 3px 3px 1px #0a0702;
text-shadow: 1px 1px 0px #0a0702;
background: -webkit-linear-gradient(#d4b78f,#ecdcb7 45%);
border: 2px groove;
border-radius: 10px;
}
.booksell{
background: white;
border-style: groove;
border-width: 2px;
border-radius: 10px;
padding-left: 20px;

}
.reset:hover{
font-family:'Tempus sans ITC'; 
background: -moz-linear-gradient(#d4b78f,#9D6524);
text-transform: uppercase;
font-weight: bold;
box-shadow: 3px 3px 1px #0a0702;
text-shadow: 1px 1px 0px #0a0702;
background: -webkit-linear-gradient(#d4b78f,#9D6524 45%);
border: 2px groove;
border-radius: 10px;
}
.submit:hover{
font-family:'Tempus sans ITC'; 
background: -moz-linear-gradient(#d4b78f,#9D6524);
text-transform: uppercase;
font-weight: bold;
box-shadow: 3px 3px 1px #0a0702;
text-shadow: 1px 1px 0px #0a0702;
background: -webkit-linear-gradient(#d4b78f,#9D6524 45%);
border: 2px groove;
border-radius: 10px;
}


</style>

</head>
</head>
  		
<body>
 <div class="back">
 <span ><a href="profile.php" class="welcome">Welcome to The BOOKSHELF : <?php echo strtoupper($_SESSION['login_username'])?></a></span>
<div class="log">
<a href="profilepage.php" class="viewprofile" name="ViewProfile">Profile</a>
<a href="logout.php" class="logout">LogOut</a>


</div>
</div>
<div style="background:black">
<img class="boyread" src="boyread.jpg" width="20%" height="100%"><img class="bookshelf" src="bookshelf.png"  width="60%" height="100%" alt="THE BOOKSHELF"></img><img class="boyread1" src="boyread1.jpg" width="20%" height="100%"></br>
</div>
<center>
<nav>
<ul class="navbar">
<li><a href="profile.php">Home</a></li>
<li><a>The Shelf</a>
<ul>
<li><a href="buybooks.php">Buy New Books</a></li>
<li><a href="sellbook.php">Sell Books</a></li>
<li><a href="buyusedbooks.php">Buy Used Books</a></li>
<li><a href="ebooks.php">E-Books</a></li></ul></li>
<li><a href="regis.php" target="_blank">Register</a></li>
<li><a href="contactus.php">Contact Us</a></li>
<li><a href="aboutus.php">About Us</a></li>
</ul>
</nav>
</center>

<img class="bookselling" src="bookselling.png" width="20%" height="319px">
<form method="post" action="upload.php" name="myform" id="myform" enctype="multipart/form-data">
<font color="#77787d" face="Eras medium ITC">
<table class="booksell" cellspacing="15">
<tr><td style="font-weight:bold">Book Name:</td><td><input type="text"  id="bookname" name="bookname" autofocus class="error" required></td></tr>
<tr><td style="font-weight:bold">Author:</td><td><input type="text" id="author" class="error" name="author" required></td></tr>
<tr><td style="font-weight:bold">Category:</td><td><select id="category" name="category" class="error" required>
  
  <option value="Reference Book">Reference Book</option>
  <option value="Educational">Educational</option>
  <option value="Novel">Novel</option>
  <option value="Others">Others</option>
</select>
<tr><td style="font-weight:bold">M.R.P:</td><td>Rs.<input type="number" class="error" id="mrp" name="mrp" required></td></tr>
<tr><td style="font-weight:bold">M.S.P:</td><td>Rs.<input type="number" class="error" id="msp" name="msp" required></td></tr>
<tr><td style="font-weight:bold">Book Description:</td><td><textarea height="200" width="100" class="error" name="description" id="description" required></textarea></td></tr>
<tr>
<td style="font-weight:bold">Upload photo:</td>
<td><input type="file" class="error" id="Photo" name="Photo" accept="image/gif, image/jpeg, image/jpg, image/x-ms-bmp, image/x-png, image/png" ></input></td>
</tr>
<tr><td><input type="reset" value="Reset Form" class="reset"/></td><td> <input type="submit" name="submit" id="submit" value="submit" class="submit"/></td>

</tr>

</table>
</font>
</form>

</body>
</html>
