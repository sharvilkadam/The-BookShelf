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
<script>
function scrollToElement(selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html, body').animate({
        scrollTop: offsetTop
    }, time);
}
$(document).ready(function(){
var clicked=true;
$("#more_ebooks").click(function(){
	if(clicked)
	{
		clicked=false;
		$("#greater_than").html(" <<");
		$("#ebooks3").slideDown(200);
		scrollToElement("#ebooks3");
		}
	else
	{
		clicked=true;
		$("#greater_than").html(">>");
		$("#ebooks3").hide();
		}
});
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
margin-top: 10%;
left: 20%;
}

.ebooks_1 {
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
padding: 15px;
width: 61%;
position: relative;
top: 51.5%;
left: 19.6%;

} 

#ebooks1{
background-color: white;
opacity: 0.95;
width: 61%;
border-style: groove;
border-width: 1px;
border-radius: 8px;
padding: 15px;
position: relative;
top: 116.3%;
left: 19.6%; 
}

#ebooks2{
background-color: white;
opacity: 0.95;
width: 61%;
border-style: groove;
border-width: 1px;
border-radius: 8px;
padding: 15px;
position: relative;
top: 181.6%;
left: 19.6%;
}

#ebooks3{
background-color: white;
opacity: 0.95;
width: 61%;
border-style: groove;
border-width: 1px;
border-radius: 8px;
padding: 15px;
position: relative;
top: 245%;
left: 19.6%;
display:none;
}

td:nth-of-type(2)
{
height: 30px;
padding: 5px;
}

td{
width: 20%;
text-align: center;
}

#most_popular_ebooks{
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

#highest_rated{
margin-top:4%;
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
top: 110.5%;
left: 19.6%;
margin-bottom:0.1%;
}

#new_titles{
margin-top:4%;
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
top: 175.7%;
left: 19.6%;
margin-bottom:0.1%;
}

.name_ebook{
font-family: 'Eras medium ITC';
font-size: 12px;
font-weight: bold;
}

#more_ebooks{
margin-top:2%;
font-family: 'Eras Medium ITC';
color: white;
margin-right: 500px;
padding-top: 10px;
padding-bottom: 10px;
position: relative;
top: 200%;
left: 19.6%;
text-transform: uppercase;
text-decoration: underline;
text-shadow: 1px 1px 2px #efeeee;
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
<div class="div1" id="most_popular_ebooks">Most Popular Free E-Books</div>
<table id="ebooks"> 
<tr>
<td><img src="ebooksimages/ebooks-authentic-networking_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-excel-2010-introduction-part-i_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-i-still-cant-speak-english_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-word-2010-advanced-part-ii_1.jpg" class="ebooks_1"></img></td>
</tr>
<tr>
<td class="name_ebook">Authentic Networking</td>
<td class="name_ebook">Excel 2010 Introduction: Part I</td>
<td class="name_ebook">I Still Can't Speak English</td>
<td class="name_ebook">Word 2010 Advanced: Part II</td>
</tr>
<tr>
<td><a href="download.php?file=ebooks/authentic_networking.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/excel_2010_introduction.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/i_stil_cant_speak_english.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/word_advanced.pdf"><input type="button" class="download" value="Download"/></a></td>
</tr>
</table>

<div class="div1" id="highest_rated">Highest Rated</div>
<table id="ebooks1">
<tr>
<td><img src="ebooksimages/ebooks-thinking-skills_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-marketing-communications_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-ccna-in-21-hours_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-an-introduction-to-matlab_1.jpg" class="ebooks_1"></img></td>
</tr>
<tr>
<td class="name_ebook">Thinking Skills</td>
<td class="name_ebook">Marketing Communications</td>
<td class="name_ebook">CCNA in 21 Hours</td>
<td class="name_ebook">An Introduction to Matlab</td>
</tr>
<tr>
<td><a href="download.php?file=ebooks/thinking_skills.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/marketing_communications.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/ccna.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/intro_to_matlab"><input type="button" class="download" value="Download"/></a></td>
</tr>
</table>

<div class="div1" id="new_titles">New Titles</div>
<table id="ebooks2">
<tr>
<td><img src="ebooksimages/ebooks-an-introduction-to-java-programming-3_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-adobe-photoshop-for-intermediate-users_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-artificial-intelligence-exercises-i_1.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-introduction-to-digital-signal-and-system-analysis_1.jpg" class="ebooks_1"></td>
</tr>
<tr>
<td class="name_ebook">Java: Graphical User Interface</td>
<td class="name_ebook">Adobe Photoshop for Intermediate users</td>
<td class="name_ebook">Artificial Intellgence: Exercises I</td>
<td class="name_ebook">Introduction to Digital Signal and System Analysis</td>
</tr>
<tr>
<td><a href="download.php?file=ebooks/java_gui.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/adobe_photoshop.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/artficial_intelligence.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/digital_systems_analysis.pdf"><input type="button" class="download" value="Download"/></a></td>
</tr>
</table>

<div class="div1" id="more_ebooks">View more e-Books <span id="greater_than">&gt;&gt;</span> </p></div>
<table id="ebooks3">
<tr>
<td><img src="ebooksimages/ebooks-java-2-the-complete-reference.jpeg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-we-always-have-paris.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-the-pragmatic-programmer.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-emotional-intelligence.jpg" class="ebooks_1"></img></td>
</tr>
<tr>
<td class="name_ebook">Java 2 The Complete Reference</td>
<td class="name_ebook">We'll Always Have Paris</td>
<td class="name_ebook">The Pragmatic Programmer</td>
<td class="name_ebook">Emotional Intelligence</td>
</tr>
<tr>
<td><a href="download.php?file=ebooks/java.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/we_always_have_paris.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/the_pragmatic_programmer.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/emotional_intelligence.pdf"><input type="button" class="download" value="Download"/></a></td>
</tr>
<tr>
<td><img src="ebooksimages/ebooks-computer-organization-carl-hamacher.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-interpersonal-skills-for-entrepreneurs.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-head-first-android-development.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-how-to-excel-at-interviews.jpg" class="ebooks_1"></img></td>
</tr>
<td class="name_ebook">Computer Organization</td>
<td class="name_ebook">Interpersonal Skills for Entrepreneurs</td>
<td class="name_ebook">Head First Android Development</td>
<td class="name_ebook">How to Excel at Interviews</td>
</tr>
<tr>
<td><a href="download.php?file=ebooks/computer_organization.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/interpersonal_skills_for_entrepreneurs.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/head_first_android_development.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/how_to_excel_at_interviews.pdf"><input type="button" class="download" value="Download"/></a></td>
</tr>
<tr>
<td><img src="ebooksimages/ebooks-33-steps-to-great-presentation.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-how-to-do-the-final-year-projects.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-cost-analysis.jpg" class="ebooks_1"></img></td>
<td><img src="ebooksimages/ebooks-introduction-to-programming-in-visual-basic-6-0.jpg" class="ebooks_1"></img></td>
</tr>
<tr>
<td class="name_ebook">33 steps to great Presentations</td>
<td class="name_ebook">How to do the Final Year Projects</td>
<td class="name_ebook">Cost Analysis</td>
<td class="name_ebook">Introduction to Visual Basic 6.0</td>
</tr>
<tr>
<td><a href="download.php?file=ebooks/33_steps_to_great_presentation.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/how_to_do_the_final_year_projects.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/cost_analysis.pdf"><input type="button" class="download" value="Download"/></a></td>
<td><a href="download.php?file=ebooks/introduction_to_visual_basic.pdf"><input type="button" class="download" value="Download"/></a></td>
</tr>
</table>
</div>
</body>
</html>