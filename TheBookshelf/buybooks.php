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
<link type='text/css' rel='stylesheet' href='buybooksslider/liquidcarousel/css/style.css' />
<link type='text/css' rel='stylesheet' href='buybooksslider/liquidcarousel/css/liquidcarousel.css' />
<script type="text/javascript" src="buybooksslider/liquidcarousel/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="buybooksslider/liquidcarousel/js/jquery.liquidcarousel.pack.js"></script>
<script type="text/javascript">
	
		$(document).ready(function() {
			$('#liquid1').liquidcarousel({height:129, duration:100, hidearrows:false});
			$('#liquid2').liquidcarousel({height:129, duration:100, hidearrows:false});
			$('#liquid3').liquidcarousel({height:129, duration:100, hidearrows:false});
			$('#liquid4').liquidcarousel({height:129, duration:100, hidearrows:false});
			$('#liquid5').liquidcarousel({height:129, duration:100, hidearrows:false});
			$('#liquid6').liquidcarousel({height:129, duration:100, hidearrows:false});
			$('#liquid7').liquidcarousel({height:129, duration:100, hidearrows:false});
			
				$('.category-name1').hover(function(){
					$('#name1').slideDown();
				});
				$('.category-name1').mouseout(function(){
					$('#name1').slideUp();
				});
				
				$('.category-name2').hover(function(){
					$('#name2').slideDown();
				});
				$('.category-name2').mouseout(function(){
					$('#name2').slideUp();
				});
				
				$('.category-name3').hover(function(){
					$('#name3').slideDown();
				});
				$('.category-name3').mouseout(function(){
					$('#name3').slideUp();
				});
				
				$('.category-name4').hover(function(){
					$('#name4').slideDown();
				});
				$('.category-name4').mouseout(function(){
					$('#name4').slideUp();
				});
				
				$('.category-name5').hover(function(){
					$('#name5').slideDown();
				});
				$('.category-name5').mouseout(function(){
					$('#name5').slideUp();
				});
				
				$('.category-name6').hover(function(){
					$('#name6').slideDown();
				});
				$('.category-name6').mouseout(function(){
					$('#name6').slideUp();
				});
		});
	
  </script> 
<link rel="stylesheet" href="nav2.css"></link>
<style type="text/css">
.category-name1, .category-name2,
.category-name4, .category-name3,
.category-name5, .category-name6, .category-name7{
color: black;
font-face: 'Eras Medium ITC';
font-size: 130%;
font-weight: bold;
background: #efeeee;
border-style: groove;
border-width: 2px;
border-radius: 10px;
padding: 5px;
padding-left: 10px;
margin-left: 10%;
}

#name1, #name2, #name3, #name4, #name5, #name6{
background: #efeeee;
text-align: justify;
padding: 10px;
border-style: groove;
border-width: 5px;
border-color: white;
border-radius: 10px;
font-weight: 600;
display: none;
width: 77.6%;
margin-left: 10%;
font-family: 'Eras Medium ITC';
font-size: 16px;

}

.liquid{
margin-left: 10%;
margin-right: 10%;

margin-bottom:5%;
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
<br/>

		<button class="category-name1">Comics</button></br></br>
		<div id="name1">Comics is a visual medium used to express ideas via images, often combined with text or visual information. Comics frequently takes the form of juxtaposed sequences of panels of images. Often textual devices such as speech balloons, captions, and sound effects ("onomatopoeia") indicate dialogue, narration, or other information. Elements such as size and arrangement of panels control narrative pacing. Cartooning and similar forms of illustration are the most common image-making means in comics; fumetti is a form which uses photographic images. Common forms of comics include comic strips, 
editorial and gag cartoons, and comic books. Since the late 20th century, bound volumes such as graphic novels, comics 
albums, and tankōbon have become increasingly common, and online webcomics have proliferated.</div>
	<div id="liquid1" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/comics_batman_detective.jpg" title="Batman"><img src="Bookshelf Images/comics_batman_detective.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_captain_america.jpg" title="Captain America"><img src="Bookshelf Images/comics_captain_america.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_fantastic_four.jpg" title="Fantastic Four"><img src="Bookshelf Images/comics_fantastic_four.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_justice_league.jpg" title="Justice League"><img src="Bookshelf Images/comics_justice_league.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_sherlock_holmes.jpg" title="Sherlock Holmes"><img src="Bookshelf Images/comics_sherlock_holmes.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_spider_man.jpg" title="Spider Man"><img src="Bookshelf Images/comics_spider_man.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_the_avengers.jpg" title="The Avengers"><img src="Bookshelf Images/comics_the_avengers.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_the_hawkeye.jpg" title="The Hawkeye"><img src="Bookshelf Images/comics_the_hawkeye.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_tomb_raider.jpg" title="Tomb Raider"><img src="Bookshelf Images/comics_tomb_raider.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_daredevil.jpg" title="Daredevil"><img src="Bookshelf Images/comics_daredevil.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_lazarus.jpg" title="Lazarus"><img src="Bookshelf Images/comics_lazarus.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_hellblazer.jpg" title="Hellblazer"><img src="Bookshelf Images/comics_hellblazer.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_powergirl.jpg" title="Powergirl"><img src="Bookshelf Images/comics_powergirl.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	</br></br>
	<button class="category-name2">Fantasy</button></br></br>
	<div id="name2">Fantasy is a genre that uses magic and other supernatural forms as a primary element of plot, theme, and/or setting. Fantasy is generally distinguished from science fiction and horror by the expectation that it steers clear of technological and macabre themes, respectively, though there is a great deal of overlap between the three (collectively known as speculative fiction or science fiction/fantasy) In its broadest sense, fantasy comprises works by many writers, artists, filmmakers, and musicians, from ancient myths and legends to many recent works embraced by a wide audience today, including young adults, most of whom are represented by the works below.</div>
	<div id="liquid2" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_the_hobbit.jpg" title="The Hobbit"><img src="Bookshelf Images/fantasy_the_hobbit.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_the_shadow_rising..jpg" title="The Shadow Rising"><img src="Bookshelf Images/fantasy_the_shadow_rising.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_twilight.jpg" title="Twilight"><img src="Bookshelf Images/fantasy_twilight.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_the_lord_of_the_rings.jpg" title="The Lord of the Rings"><img src="Bookshelf Images/fantasy_the_lord_of_the_rings.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_the_two_towers.jpg" title="The Two Towers"><img src="Bookshelf Images/fantasy_the_two_towers.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_mockingjay.jpg" title="Mocking Jay"><img src="Bookshelf Images/fantasy_mockingjay.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_inkheart.jpg" title="Ink Heart"><img src="Bookshelf Images/fantasy_inkheart.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_wild_things.jpg" title="Wild Things"><img src="Bookshelf Images/fantasy_wild_things.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_the_golden_compass.jpg" title="The Golden Compass"><img src="Bookshelf Images/fantasy_the_golden_compass.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_american_gods.jpg" title="American Gods"><img src="Bookshelf Images/fantasy_american_gods.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_a_feast_for_crows.jpg" title="A Feast for Crows"><img src="Bookshelf Images/fantasy_a_feast_for_crows.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_the_lies_of_lock_lamora.jpg" title="The Lies of Locke Lamora"><img src="Bookshelf Images/fantasy_the_lies_of_lock_lamora.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fantasy_a_clash_of_kings.jpg" title="A Clash of Kings"><img src="Bookshelf Images/fantasy_a_clash_of_kings.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	<br/>
	</br>
	
	<button class="category-name3">Fiction</button><br/></br>
	<div id="name3">Fiction is the telling of stories which are not real. More specifically, fiction is an imaginative form of narrative, one of the four basic rhetorical modes. Although the word fiction is derived from the Latin fingo, fingere, finxi, fictum, "to form, create", works of fiction need not be entirely imaginary and may include real people, places, and events. Fiction may be either written or oral. Although not all fiction is necessarily artistic, fiction is largely perceived as a form of art or entertainment. The ability to create fiction and other artistic works is considered to be a fundamental aspect of human culture, one of the defining characteristics of humanity</div>
	<div id="liquid3" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/fiction_dan_brown_angels_demons.jpg" title="Angels and Demons"><img src="Bookshelf Images/fiction_dan_brown_angels_demons.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_the_walking_engine.jpg" title="The Walking Dead"><img src="Bookshelf Images/fiction_the_walking_engine.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_secretariat_reborn.jpg" title="Secretariat Reborn"><img src="Bookshelf Images/fiction_secretariat_reborn.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_runner_by_patrick_lee.jpg" title="Runner"><img src="Bookshelf Images/fiction_runner_by_patrick_lee.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_your_presence_is_requested_at_suvanto.jpg" title="Your Presence is requested at Suvanto"><img src="Bookshelf Images/fiction_your_presence_is_requested_at_suvanto.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_forgotten_girl.jpg" title=" Forgotten Girl"><img src="Bookshelf Images/fiction_forgotten_girl.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_to_the_end_of_the_land_large.jpg" title="To the End of the Land"><img src="Bookshelf Images/fiction_to_the_end_of_the_land_large.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_life_of_pi.jpg" title="Life of Pi"><img src="Bookshelf Images/fiction_life_of_pi.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_dan_brown_inferno.jpg" title="Inferno"><img src="Bookshelf Images/fiction_dan_brown_inferno.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_the_great_gatsby.jpg" title="The Great Gatsby"><img src="Bookshelf Images/fiction_the_great_gatsby.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_sorcerer_stone.jpg" title="The Sorceror's Stone"><img src="Bookshelf Images/fiction_sorcerer_stone.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_the_alchemist.jpg" title="The Alchemist"><img src="Bookshelf Images/fiction_the_alchemist.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/fiction_a_game_of_thrones.jpg" title="A Game of Thrones"><img src="Bookshelf Images/fiction_a_game_of_thrones.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	<br/>
	</br>
	
	<button class="category-name4">Non-Fiction</button></br></br>
	<div id="name4">Non-fiction is one of the two main divisions in prose writing, the other form being fiction. Non-fiction is a story based on real facts and information . Non-fiction is a narrative, account, or other communicative work whose assertions and descriptions are believed by the author to be factual. These assertions and descriptions may or may not be accurate, and can give either a true or a false account of the subject in question; however, it is generally assumed that authors of such accounts believe them to be truthful at the time of their composition or, at least, pose them to their audience as historically or empirically true. Reporting the beliefs of others in a non-fiction format is not necessarily an endorsement of the ultimate veracity of those beliefs, it is simply saying it is true that people believe them (for such topics as mythology, religion). Non-fiction can also be written about fiction, giving information about these other works. Non-fiction need not necessarily be written text, since pictures and film can also purport to present a factual account of a subject</div>
	<div id="liquid4" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_steve_jobs.jpg" title="Steve Jobs"><img src="Bookshelf Images/nonfiction_steve_jobs.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_the_future_of_the_mind.jpg" title="The Future of the Mind"><img src="Bookshelf Images/nonfiction_the_future_of_the_mind.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_young_money.jpg" title="Young Money"><img src="Bookshelf Images/nonfiction_young_money.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_its_complicated_the_social_life.jpg" title="Its Complicated"><img src="Bookshelf Images/nonfiction_its_complicated_the_social_life.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_history_of_the_world.jpg" title="History of the World"><img src="Bookshelf Images/nonfiction_history_of_the_world.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_a_short_history_of_the_united_states.jpg" title="A short history of the USA"><img src="Bookshelf Images/nonfiction_a_short_history_of_the_united_states.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_the_avengers.jpg" title="The Avengers"><img src="Bookshelf Images/comics_the_avengers.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_the_hawkeye.jpg" title="The Hawkeye"><img src="Bookshelf Images/comics_the_hawkeye.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_tomb_raider.jpg" title="Tomb Raider"><img src="Bookshelf Images/comics_tomb_raider.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_eat_pray_love.jpg" title="Eat Pray Love"><img src="Bookshelf Images/nonfiction_eat_pray_love.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_the_double_helix.jpg" title="The Double Helix"><img src="Bookshelf Images/nonfiction_the_double_helix.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_a_short_history_of_nearly_everything.jpg" title="A Short History of Nearly Everything"><img src="Bookshelf Images/nonfiction_a_short_history_of_nearly_everything.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/nonfiction_fast_food_nation.jpg" title="Fast Food Nation: The Dark Side of the All-American Meal"><img src="Bookshelf Images/nonfiction_fast_food_nation.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	<br/>
	</br>
	
	<button class="category-name5">Horror</button></br></br>
	<div id="name5">Horror fiction is fiction in any medium intended to scare, unsettle, or horrify the audience. Historically, the cause of the "horror" experience has often been the intrusion of a supernatural element into everyday human experience. Since the 1960s, any work of fiction with a morbid, gruesome, surreal, or exceptionally suspenseful or frightening theme has come to be called "horror". Horror fiction often overlaps science fiction or fantasy, all three of which categories are sometimes placed under the umbrella classification speculative fiction. Haunting is used as a plot device in horror fiction and paranormal-based fiction. Legends about haunted houses have long appeared in literature. For example, the Arabian Nights tale of "Ali the Cairene and the Haunted House in Baghdad" revolves around a house haunted by jinns. The influence of the Arabian Nights on modern horror fiction is certainly discernable in the work of H. P. Lovecraft. In his early years as a child, he would imagine himself living the adventures of the heroes in the book, and it inspired him to create his famed Necronomicon. Today horror is one of the most popular categories of film.</div>
	<div id="liquid5" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/horror_red_dragon.jpg" title="Red Dragon"><img src="Bookshelf Images/horror_red_dragon.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_the_dead_zone.jpg" title="The Dead Zone"><img src="Bookshelf Images/horror_the_dead_zone.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_the_haunting_of_hill_house.jpg" title="The Haunting of Hill House"><img src="Bookshelf Images/horror_the_haunting_of_hill_house.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_the_voices_in_our_head.jpg" title="The Voices in our Head"><img src="Bookshelf Images/horror_the_voices_in_our_head.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_vengeance.jpg" title="Vengeance"><img src="Bookshelf Images/horror_vengeance.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_the_mist.jpg" title="The Mist"><img src="Bookshelf Images/horror_the_mist.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_the_little_stranger.jpg" title="The Little Stranger"><img src="Bookshelf Images/horror_the_little_stranger.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_night_chills.jpg" title="Night Chills"><img src="Bookshelf Images/horror_night_chills.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_the_green_mile.jpg" title="The Green Mile"><img src="Bookshelf Images/horror_the_green_mile.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_dracula.jpg" title="Dracula"><img src="Bookshelf Images/horror_dracula.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_terror.jpg" title="Terror"><img src="Bookshelf Images/horror_terror.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_heart_shaped_box.jpg" title="Heart Shaped Box"><img src="Bookshelf Images/horror_heart_shaped_box.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/horror_i_am_a_legend.jpg" title="I am a Legend"><img src="Bookshelf Images/horror_i_am_a_legend.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	<br/>
	</br>
	
	<button class="category-name6">Thriller</button></br></br>
	<div id="name6">Thrillers are characterized by fast pacing, frequent action, and resourceful heroes who must thwart the plans of more-powerful and better-equipped villains. Literary devices such as suspense, red herrings and cliffhangers are used extensively. Thrillers often overlap with mystery stories, but are distinguished by the structure of their plots. In a thriller, the hero must thwart the plans of an enemy, rather than uncover a crime that has already happened. Thrillers also occur on a much grander scale: the crimes that must be prevented are serial or mass murder, terrorism, assassination, or the overthrow of governments. Jeopardy and violent confrontations are standard plot elements. While a mystery climaxes when the mystery is solved, a thriller climaxes when the hero finally defeats the villain, saving his own life and often the lives of others.</div>
	<div id="liquid6" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/thriller_scream_for_me.jpg" title="Scream for Me"><img src="Bookshelf Images/thriller_scream_for_me.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_silent_wife.jpg" title="The Silent Wife"><img src="Bookshelf Images/thriller_the_silent_wife.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_girl_with_the_dragon_tattoo.jpg" title="The Girl with the Dragon Tattoo"><img src="Bookshelf Images/thriller_the_girl_with_the_dragon_tattoo.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_evangeline.jpg" title="Evangeline"><img src="Bookshelf Images/thriller_evangeline.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_bourne_ultimatum.jpg" title="The Bourne Ultimatum"><img src="Bookshelf Images/thriller_the_bourne_ultimatum.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_zombie_room.jpg" title="The Zombie Room"><img src="Bookshelf Images/thriller_the_zombie_room.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_hunger_games.jpg" title="The Hunger Games"><img src="Bookshelf Images/thriller_the_hunger_games.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/comics_the_hawkeye.jpg" title="The Hawkeye"><img src="Bookshelf Images/comics_the_hawkeye.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_da_vinci_code.jpg" title="Da Vinci Code"><img src="Bookshelf Images/thriller_da_vinci_code.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_killing_floor.jpg" title="Killing Floor"><img src="Bookshelf Images/thriller_killing_floor.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_day_of_the_jackal.jpg" title="The Day of the Jackal"><img src="Bookshelf Images/thriller_the_day_of_the_jackal.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_alex_cross_run.jpg" title="Alex Cross, Run"><img src="Bookshelf Images/thriller_alex_cross_run.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/thriller_the_girl_who_played_with_fire.jpg" title="The Girl Who Played With Fire"><img src="Bookshelf Images/thriller_the_girl_who_played_with_fire.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	<br/>
	</br>
	
	<button class="category-name7">Sports</button>
	</br>
	</br>
	<div id="liquid7" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
			<li><a href="book.php?photo=Bookshelf Images/sports_calling_the_shots.jpg" title="Calling the Shots"><img src="Bookshelf Images/sports_calling_the_shots.jpg" width="88" height="126" alt="image 01" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_fever_pitch.jpg" title="Fever Pitch"><img src="Bookshelf Images/sports_fever_pitch.jpg" width="88" height="126" alt="image 02" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_barca.jpg" title="Barca"><img src="Bookshelf Images/sports_barca.jpg" width="88" height="126" alt="image 03" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_bigger_than_the_game.jpg" title="Bigger than the Game"><img src="Bookshelf Images/sports_bigger_than_the_game.jpg" width="88" height="126" alt="image 04" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_a_champions_mind.jpg" title="A Champions Mind"><img src="Bookshelf Images/sports_a_champions_mind.jpg" width="88" height="126" alt="image 05" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_moneyball.jpg" title="Moneyball"><img src="Bookshelf Images/sports_moneyball.jpg" width="88" height="126" alt="image 06" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_the_inner_game_of_tennis.jpg" title="The Inner game Of Tennis"><img src="Bookshelf Images/sports_the_inner_game_of_tennis.jpg" width="88" height="126" alt="image 07" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_born_to_run.jpg" title="Born to Run"><img src="Bookshelf Images/sports_born_to_run.jpg" width="88" height="126" alt="image 08" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_the_art_of_captaincy.jpg" title="The Art of Captaincy"><img src="Bookshelf Images/sports_the_art_of_captaincy.jpg" width="88" height="126" alt="image 09" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_the_blind_side.jpg" title="The Blind Side: Evolution of a Game"><img src="Bookshelf Images/sports_the_blind_side.jpg" width="88" height="126" alt="image 10" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_the_big_field.jpg" title="The Big Field"><img src="Bookshelf Images/sports_the_big_field.jpg" width="88" height="126" alt="image 11" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_the_glory_of_their_times.jpg" title="The Glory of Their Times:The Story of the Early Days of Baseball"><img src="Bookshelf Images/sports_the_glory_of_their_times.jpg" width="88" height="126" alt="image 12" border="0" /></a></li>
			<li><a href="book.php?photo=Bookshelf Images/sports_how_soccer_explains_the_world.jpg" title="How Soccer Explains the World"><img src="Bookshelf Images/sports_how_soccer_explains_the_world.jpg" width="88" height="126" alt="image 13" border="0" /></a></li>
			<!--<li><a href="#" title="image 14"><img src="Bookshelf Images/14.jpg" width="88" height="126" alt="image 14" border="0" /></a></li>
			<li><a href="#" title="image 15"><img src="Bookshelf Images/15.jpg" width="88" height="126" alt="image 15" border="0" /></a></li>-->
		</ul>
	</div>
	<span class="next"></span>
	</div>
	<br/>
</body>
</html>