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
  <script>
    $(window).load(function(){
      $(".back").sticky({ topSpacing: 0 });
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
	
#container {
	position: absolute;
    padding: 0px;
	margin: 0px;
	
    width: 100%;
    height: 100%;
    overflow: hidden; 
	margin-bottom:50px;
	z-index:-1;
	
}

.box {
    position: absolute;
    width: 68%;
    height: 550px;
    line-height: 300px;
    font-size: 50px;
    text-align: center;
    border: 2px solid black;
    left: 150%;
    top: 50px;
    margin-left: -34%;
	
	 box-shadow: 0 0 35px #00d2ff;
          -webkit-box-shadow: 0 0 35px #00d2ff; 
          -moz-box-shadow: 0 0 35px #00d2ff;
           border:1px solid rgba(0,0,255, 0.8); 
}

#box1 {
    background-color: black;
    left: 50%;
}

#box2 {
    background-color: black;
}

#box3 {
    background-color: black;
}

#box4 {
    background-color: black;
}
iframe{
	width:100%;
	height:100%;
	}
.Animate,.Animate2{
    position:absolute;
    z-index:2;
    top:50%;
    margin-top:-20px;
    text-align:center;
    padding:20px;
    background:#A31010;
    color: white;
}
.Animate{
margin-left:1.5%;
}
.Animate2{
margin-right:1.5%;
}
.Animate:hover{
	 background: #4b545f;
  background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
  background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
  background: -webkit-linear-gradient(top, #811919 0%,#680000 40%);
	}
.Animate2:hover{
	 background: #4b545f;
  background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
  background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
  background: -webkit-linear-gradient(top, #811919 0%,#680000 40%);
	}
.Animate{
	left:0;
	}
.Animate2{
	right:0;
	}
</style>
<style type="text/css">
.about {
border-radius: 10px;
border-color: white;
border-width: 2px;
margin-left:20%; 
margin-top:-24% ; 
background-color:grey;
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
<li><a href="contactus.php" >Contact Us</a></li>
<li><a href="aboutus.php" >About Us</a></li>
</ul>
</nav>
</center>
<img src="about-us.png" class="us" width="20%" height="20%">		
<font color="white" face="papyrus" size="4px">
<div><table class="about" ><tr><td>Welcome to <mark>The BOOKSHELF</mark>.<br>A one stop portal where you can buy new and old books, sell your used books to buyers at your selling price.<br>Remove the middle man (retailers) and make the most out of your money. 
<br>The bookshelf lets you give away books you no longer need in exchange for books you really want.
<br>Read available books online , upload books you wish to share.
<br>Writing is your passion? Have a self authored book to share? Upload it.We'll help you advertise.
<br>We are your personal digital library/book store to feed all your hunger for books!
<br>Have a booktastic day!
<br><pre>                                              -Team "The BOOKSHELF"</pre></tr></td>
</table></div></font>
</body>
</html>