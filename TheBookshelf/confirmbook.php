<?php
//session_start();
include('session.php');

if(isset($_GET['photo']))
{
	$image=$_GET['photo'];
	$query1=mysql_query("SELECT * FROM book WHERE image='$image' ");
	$row=mysql_fetch_array($query1);
	$uname=$_SESSION['login_username'];
	$query1=mysql_query("SELECT email,contact,address FROM user_master WHERE uname='$uname' ");
	$row2=mysql_fetch_array($query1);

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


<style>
.maindiv{
margin-top:-2%;
margin-bottom:5%;
}
.div1{
width: 59.1%;
position: relative;
margin-top: 4%;

}
.info{
background-color: white;
opacity: 0.95;
border-style: groove;
border-width: 1px;
border-radius: 8px;
padding: 15px;
width: 59%;
word-wrap: normal;
font-family: 'Eras medium ITC';
font-weight:bold;
font-size: 16px;
padding: 5px;
position: relative;

margin-top:3%;
}
.books {
height: 200px;
width: 150px;
border-style: solid;
border-width: 1px;
border-color: black;
}

#ebooks{
background-color: white;
opacity: 0.95;
border-style: groove;
border-width: 1px;
border-radius: 8px;
//padding: 15px;
padding-left:1.5%;
padding-top:1.5%;
width: 60%;
position: relative;
top: 51.5%;

word-wrap: normal;
font-family: 'Eras medium ITC';
font-weight:bold;
font-size: 16px;
} 

td:first-child{
width:20%;
text-align:right;
}
td{
padding:7px;

width: 20%;

}


tr{
padding-top:20px;

//margin-bottom:2%;
}

#usedbooks{
color: black;
background: #efeeee;
border-style: groove;
border-color: #efeeee;
border-width: 2px;
border-radius: 10px;
width: 59.1%;
font-family: 'Eras medium ITC';
font-weight:bold;
font-size: 24px;
text-align:center;
padding: 5px;
text-shadow: 1px 1px 2px white;
position: relative;
top: 45.7%;

z-index: -9;
margin-bottom:0.1%;
}

.name_ebook{
font-family: 'Eras medium ITC';
font-size: 12px;
font-weight: bold;
}



.download{
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
</head>
  		
<body>
 <div class="back">
 <span ><a class="welcome" href="profile.php" >Welcome to The BOOKSHELF : <?php echo strtoupper($_SESSION['login_username'])?></a></span>
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
<li><a href="aboutus.php">About Us</a></li>
</ul>
</nav>
</center><br/>
<center>
<div class="maindiv">
<div class="info"><ul>
					<li>This Book will be delivered to your address stored in the database.</li>
					<li>You will be called on your number for confirmation.</li>
					<li>C.O.D (Cash on Delivery)</li>
					</ul></div>
<div class="div1" id="usedbooks"><?php echo $row['bname'];?></div>
<table id="ebooks"> 

<tr><td></td></tr>
<tr>
<td><a href="insertconfirmbook.php?photo=<?php echo $row['image']?>"><input type="button" value="Confirm Buy" class="download"></input></a></td>
<td><a href="buybooks.php"><input type="button" value="Back..." class="download"></input></a></td>
</tr>

<tr>
	
	<td colspan="2"><center><?php echo "<img src=\"".$row['image']."\" class=\"books\"></img>"; ?></center></td>
</tr>
<tr>
	<td>UserName:</td>
	<td><?php echo $uname;?></td>
</tr>
<tr>
	<td>Contact:</td>
	<td><?php echo $row2['contact'];?></td>
</tr>
<tr>
	<td>Address:</td>
	<td><?php echo $row2['address'];?></td>
</tr>
<tr>
	<td>Email:</td>
	<td><?php echo $row2['email'];?></td>
</tr>

<tr>
	<td>Book Name:</td>
	<td><?php echo $row['bname'];?></td>
</tr>
<tr>
	<td>M.R.P:</td>
	<td><?php echo $row['mrp'];?></td>
</tr>

<tr>
	<td>Category:</td>
	<td><?php echo $row['category'];?></td>
</tr>
<tr>
	<td>Description:</td>
	<td><?php echo $row['description'];?></td>
</tr>



<tr><td></td></tr>

</table>
</center>
</div>
</body>
</html>

<?php
}	//close if
?>