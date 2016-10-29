<?php
//session_start();
include('session.php');
	//include('db.php');
 	//dbconnect('thebookshelf');
    $user=mysql_real_escape_string($_SESSION['login_username']);
    
    $result=mysql_query("SELECT * FROM user_master WHERE 
                         uname='$user'");
    $row=mysql_fetch_array($result);
	
	$result1=mysql_query("SELECT image,bname,mrp,msp FROM sellbook WHERE 
                         uname='$user'");
    
	
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
width:60%;

margin-bottom:5%;
}
.div1{
background: white;
margin-top: -0.9%;
//margin-left:5%;
//margin-right: 4%;
width: 96.5%;
border-style: groove;
border-width: 0.5px;
border-color: #efeeee;
border-radius: 10px;
padding: 10px;
}

#me{
//margin-left: 5%;
background-color: #efeeee;
color: black;
font-size: 20px;
text-shadow: 1px 1px 2px black;
font-family: 'Eras Medium ITC';
width: 96.5%;
height: 60px;
padding: 10px;
border-style: groove;
border-width: auto;
border-color: black;
border-radius: 8px;
}

.info{
padding: 10px;
font-weight: bold;
font-family: 'Eras Medium ITC';
font-size: 18px;
}

.about_me{
width: 10%;
height: 55px;
vertical-align: middle;
}

td:first-child{
width:17%;
text-align:right;
}
td{
padding:9px;

width: 20%;
word-wrap:normal;
}
tr{
padding-top:20px;

}
.books {
height: 200px;
width: 150px;
border-style: solid;
border-width: 1px;
border-color: black;
}
.abooks{
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
font-weight:bold;
font-size:15px;
font-family: 'Eras medium ITC';
}
.abooks td{
padding:2.5%;
height: 30px;
width: 20%;
text-align: center;
}
.abooks td:last-child{
padding-right:1.5%;
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
<li><a href="aboutus.php">About Us</a></li>
</ul>
</nav>
</center>
<center>
<div class="maindiv">
<p id="me"><img src="about_me2.png" class="about_me"></img><span>About Me</span></p>
<div class="div1">
<table class="info">
<tr>
	<td>UserName:</td><td><?php echo $row['uname'];?></td>
</tr>
<tr>
	<td>Email:</td><td><?php echo $row['email'];?></td>
</tr>
<tr>
	<td>Address:</td><td><?php echo $row['address'];?></td>
</tr>
<tr>
	<td>Gender:</td><td><?php echo $row['gender'];?></td>
</tr>
<tr>
	<td>Age:</td><td><?php echo $row['age'];?></td>
</tr>
<tr>
	<td>Workplace/College/High School:</td><td><?php echo $row['workplace'];?></td>
</tr>
<tr>
	<td>Contact:</td><td><?php echo $row['contact'];?></td>
</tr>
<tr>
	<td>Books Advertized:</td>
	<td><a href="sellbook.php"><input type="button" value="Sell More Books" class="download"></input></a></td>
</tr>
</table>
<center>
<table class="abooks">
<tr>
<?php
$maxcols = 3;
$i = 0;
$flag=0;
while($row1=mysql_fetch_array($result1))
{
	if ($i == $maxcols) {
        $i = 0;
		$flag=1;
        echo "</tr><tr>";
    }
	echo "<td><img src=\"".$row1['image']."\" class=\"books\"></img><br><div class=\"name_ebook\">".$row1['bname']."<br>MRP:".$row1['mrp']."<br>MSP:".$row1['msp']."</div><br><div><a href=\"usedbook2.php?photo=".$row1['image']."\"><input type=\"button\" class=\"download\" value=\"Remove\"/></a></div></td>";
	$i++;
}
if($i==0 and $flag==0)
{
	echo "<td>No Book on Sale.</td><td><a href=\"sellbook.php\"><input type=\"button\" class=\"download\" value=\"Sell Book\"/></a></td>";
	echo "<tr><td></td></tr>";
}
else{
	//Add empty <td>'s to even up the amount of cells in a row:
	while ($i <= $maxcols) {
		echo "<td>&nbsp;</td>";
		$i++;
	}
}
?>

</tr>

</table>
<br><br>
</center>
</div>
</div>
</center>
</body>
</html>