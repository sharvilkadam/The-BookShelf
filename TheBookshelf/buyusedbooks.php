<?php
//session_start();
include('session.php');
$query1=mysql_query("SELECT * FROM sellbook") or die(mysql_error());

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
margin-top:-8%;
margin-bottom:5%;
}
.div1{
width: 60%;
position: relative;
margin-top: 4%;
left: 20%;
}
.info{
background-color: white;
opacity: 0.95;
border-style: groove;
border-width: 1px;
border-radius: 8px;
padding: 15px;
width: 60%;
word-wrap: normal;
font-family: 'Eras medium ITC';
font-weight:bold;
font-size: 16px;
padding: 5px;
position: relative;
left: 19.5%;
margin-top:8%;

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
left: 19.6%;

} 


td{
padding:2.5%;
height: 30px;
width: 20%;
text-align: center;

}
td:last-child{
padding-right:1.5%;
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
width: 60%;
font-family: 'Eras medium ITC';
font-size: 20px;
padding: 5px;
text-shadow: 1px 1px 2px white;
position: relative;
top: 45.7%;
left: 19.6%;
z-index: -9;
margin-bottom:0.1%;
}

.name_ebook{
font-family: 'Eras medium ITC';
font-size: 15px;
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

<div class="maindiv">
<div class="info"><ul>
					<li>The following 2nd-hand books are Advertised by their current owners for sale.</li>
					<li>If any of the following books' M.S.P interests you, click on the book for the Details of Owner.</li>
					<li>You can contact the owner directly, no 3rd party involved.</li>
					<li>After successfull negotiations with the potential buyer, Please remove your respective Advertisement via your PROFILE page to conserve your identity.</li>
					</ul></div>
<div class="div1" id="usedbooks">Used Books for Sale</div>
<table id="ebooks"> 
<tr>
<?php
$maxcols =4;  
$i = 0;
while($row=mysql_fetch_array($query1))
{
	if ($i == $maxcols) {
        $i = 0;
        echo "</tr><tr>";
    }
	echo "<td><img src=\"".$row['image']."\" class=\"books\"></img><br><div class=\"name_ebook\">".$row['bname']."<br>MRP:".$row['mrp']."<br>MSP:".$row['msp']."</div><br><div><a href=\"usedbook.php?photo=".$row['image']."\"><input type=\"button\" class=\"download\" value=\"More...\"/></a></div></td>";
	$i++;
}
//Add empty <td>'s to even up the amount of cells in a row:
while ($i <= $maxcols) {
    echo "<td>&nbsp;</td>";
    $i++;
}

?>

<!--<td><img src="ebooksimages/ebooks-authentic-networking_1.jpg" class="books"></img><br>
	<div class="name_ebook">Authentic Networking<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/authentic_networking.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
<td><img src="ebooksimages/ebooks-excel-2010-introduction-part-i_1.jpg" class="books"></img><br>
	<div class="name_ebook">Excel 2010 Introduction: Part I<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/excel_2010_introduction.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
<td><img src="ebooksimages/ebooks-i-still-cant-speak-english_1.jpg" class="books"></img><br>
	<div class="name_ebook">I Still Can't Speak English<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/i_stil_cant_speak_english.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
<td><img src="ebooksimages/ebooks-word-2010-advanced-part-ii_1.jpg" class="books"></img><br>
	<div class="name_ebook">Word 2010 Advanced: Part II<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/word_advanced.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
</tr>
<tr><td></td></tr>
<tr>
<td><img src="ebooksimages/ebooks-authentic-networking_1.jpg" class="books"></img><br>
	<div class="name_ebook">Authentic Networking<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/authentic_networking.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
<td><img src="ebooksimages/ebooks-excel-2010-introduction-part-i_1.jpg" class="books"></img><br>
	<div class="name_ebook">Excel 2010 Introduction: Part I<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/excel_2010_introduction.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
<td><img src="ebooksimages/ebooks-i-still-cant-speak-english_1.jpg" class="books"></img><br>
	<div class="name_ebook">I Still Can't Speak English<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/i_stil_cant_speak_english.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
<td><img src="ebooksimages/ebooks-word-2010-advanced-part-ii_1.jpg" class="books"></img><br>
	<div class="name_ebook">Word 2010 Advanced: Part II<br>MRP:135<br>MSP:120</div><br>
	<div><a href="download.php?file=ebooks/word_advanced.pdf"><input type="button" class="download" value="Download"/></a></div>
</td>
</tr>
-->

</tr>
</table>

</div>
</body>
</html>