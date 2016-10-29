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
<script src="jquery_validate.js"></script>
<script type="text/javascript" src="jquery.sticky.js"></script>
  <script>
    $(window).load(function(){
      $(".back").sticky({ topSpacing: 0 });
    });
  </script>
<script>
$(document).ready(function(){
$("#myform").validate({
rules:
{
name: "required",
email:
	{
		required: true,
		email:true
	},
message: "required",
},
messages:
{
	name: "Please enter your name",
	email: 
	    {
			required:"Please enter your email-id",
			email:"Enter a valid email address!"
		},
	message: "Please Enter your message"
	}
});
$(".submit").click(function(){
if(($(".email").val()=="") && ($(".name").val()=="") && ($(".message").val() == ""))
$("#field").addClass("Absposition");
});
});
</script>
    
<link rel="stylesheet" href="nav2.css"></link>
<style type="text/css">
#div{
background-color:white;
margin-left: 250px;
margin-right: 250px;
border-style: groove;
border-width: 2px;
border-radius: 8px;
margin-bottom:5%;
margin-top:5%;
}

.name, .email, .your_message, .madhur, .yash, .sharvil{
font-family: 'Eras medium ITC';

font-weight: bold;
text-transform: uppercase;
padding-left: 50px;
padding-top: 10px;
}

.team {
font-family:'Eras medium ITC';
font-weight: bold;
width: 220px;
position: absolute;
top: 500px;
left: 690px;
}
.threepeople {
height: 35px;
width: 35px;
position: absolute;
top: 13px;
left: 25px;
}

.message_icon{
height: 35px;
width: 35px;

padding-right:30px;
}

#caption {
position: absolute;
top: 396px;
left: 650px;
font-family: 'Eras medium ITC';
text-transform: uppercase;
font-weight: bold;
text-align: center;
font-size: 20px;
text-shadow: 1px 1px 10px white;
padding-left: 65px;
padding-top: 20px;
padding-bottom: 20px;
color:black;
border-left-style: groove;
border-width: 3px;
border-color: #efeeee;
border-radius: 10px;
}

.email_madhur, .email_yash, .email_sharvil{
text-transform: lowercase;
font-weight: normal;
font-size: 15px;
}

tr,td {
padding-left: 10px;
padding-right: 15px;
border-left-style: groove;
border-bottom-style: groove;
border-width: 2px;
border-color: orange;
text-align: center;
}
.message {
text-transform: uppercase;
font-size: 20px;
font-weight: bold;
font-family: 'Eras medium ITC';
text-shadow: 2px 2px 10px white;
padding-left: 50px;
padding-top: 15px;
padding-bottom: 15px;
border-bottom-style: groove;
border-right-style: groove;
border-left-style: groove;
border-color: #efeeee;
color:black;
background-color: #efeeee;
border-radius: 10px;
}
.position{
position:relative;
top: 260px;
left: 30px;
color: red;
padding-left: 4px;
}

.Absposition {
position: relative;
top: 305px;
left: 30px;
color: red;
padding-left: 4px;
}

.error {
   color: red;
   font-size: 13px;
   font-family:'Eras medium ITC' ;
   text-transform:none;
}
.download{
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

.download:hover{
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
<li><a href="aboutus.php" >About Us</a></li>
</ul>
</nav>
</center>

 <div id="main_div">
		<div id="div">
	<div class="message">
	<span><img src="message.ico" class="message_icon"></img></span>Send us a Message
	</div>
    <form action="insertcontactus.php" method="POST" id="myform" style="padding-right:30px">
	<div class="name" >Name:<br><input name="name" size="30" type="text" class="error"></div>
	<div class="email">Your Email:<br><input name="email" size="30" type="text" class="error"></div>
	<div class="your_message">Your Message:<br><textarea name="message" rows="4" cols="30" class="error"></textarea></div>
    <input value="Send Message" type="submit" class="download" name="submit">
    </form>
	<br>
	<div id = "caption"><img src="threepeople-orange.png" class="threepeople"></img>OUR TEAM</div>
	<table class="team">
	<tr>
	<td class="sharvil">Sharvil kadam<br><span class="email_sharvil">sharvilkadam@yahoo.in</span></td>
	</tr>
	<tr>
	<td class="yash">Yash jain<br><span class="email_yash">yashjain461993@gmail.com</span></td>
	</tr>
	<tr>
	<td class="madhur">Madhur jain <br><span class="email_madhur">madhurjain67@gmail.com</span></td>
	</tr>
	</table>
	</div>
	</div>
  

</body>
</html>