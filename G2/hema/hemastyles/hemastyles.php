﻿<?php
	include '../../forum/functions.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HEMA Styles</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="hemastyles.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="../../style/base.css">
</head>
<body>
	<header>
		<h1>HEMA</h1>
		<nav>
			<ul>
				<li><a href="../../index.php">Home</a></li>
				
				<li class="dropdown">
					<a href="#" class="button">HEMA</a>
					<div class="menu">
						<a href="../abouthema/abouthema.php">About HEMA</a>
						<a href="#">HEMA Styles</a>
						<a href="../hemainbc/hemainbc.php">HEMA in BC</a>
					</div>
				</li>
				
                <li><a href="../../aboutus/aboutus.php">About Us</a></li>
				
			</ul>
		</nav>
		
		<div id="login">
		<?php
			if (isLoggedIn()){
				echo 'Welcome, '. $_SESSION['SESS_FIRST_NAME'] . '  |  ';
				echo '<a href="../../forum/logout.php">Logout</a><br/>';
			} else {
				echo '<a href="../../login/loginorsignup.php">Login / Signup</a>';
			}
		?>

		</div>
		    
	</header>
	
	<main>
		<div id="wrapper">
			<img id="bannerimg" src = "../../content/fenestraBanner.png" alt = "Two longsword fencers locked in a high bind.">
			<div class="sideList">
				<ul>
					<li><a id="one" href="#">Longsword</a></li>
					<li><a id="two" href="#">Rapier</a></li>
					<li><a id="three" href="#">Sidesword</a></li>
					<li><a id="six" href="#">Messer</a></li>
					<li><a id="four" href="#">Hand to Hand</a></li>
					<li><a id="five" href="#">Other</a></li>
				</ul>
			</div>
			<div id="default" class="styleDescriptions">
				<h1>The Many Fighting Styles Covered By HEMA</h1>
				<p>HEMA covers a wide array of martial combat systems and weapons. Even within each weapon type different schools teach fighting styles which are based on different historical masters and teachers.
				<p>Click on the buttons in the left side navigation pane to see a little bit about some of the most popular weapons in modern HEMA.
			</div>

			<div id="longsword" class="hidden">
				<h1>Longsword</h1>
				<h4>Historically</h4>
				<p>Longswords are weapons which were meant to be used in two hands and featured a simple cross guard and a straight, double edged blade. They are effective for both cutting and thrusting, and were commonly used both in and out of armour; on the battlefield as a soldiers secondary weapon, or in a duel as a weapon of honour.
				<h4>Today</h4>
				<p>Within the modern HEMA community Longsword is by far the most popular weapons to learn to fight with and it had the most/largest tournaments of all the fighting disciplines. Practitioners have the option of learning from two separate lineages, German (the more popular in tournaments) and Italian (which focused more on 'the duel'). Most German based schools focus on the teachings of the Jochim Meyer, while the Italian based schools typically teach from Fiore dei Liberi's treatise 'The Flower of Battle'.
				</p>
				<div id="bottomPic">
				<img src = "../../content/longsword.png">
				</div>
			</div>

            <div id="rapier" class="hidden">
              	<h1>Rapier</h1>
				<h4>Historically</h4>
				<p>Rapiers are one handed weapons inteneded primarily for thrusting. They have long narrow blades (usually even longer than a longsword), and more complex hand protection than most other swords. Although they were taken into battle as sidearms, they were truely duelling weapons which were speciallized for one on one combat.
				<h4>Today</h4>
				<p>The weapon of Three Musketeers and Zorro, but the modern recreation of historical rapier draws in a large portion of the HEMA community. It also has the benefit of requiring minimal safety equipment and being relatively unlikely to injure seriously, which makes it popular with people who don't like the risks associated with heavier weapons such as longswords. Most schools of rapier teach based on the documents written by the Italian masters Ridolfo Capo Ferro, and Salvator Fabris.
            </div>

            <div id="sidesword" class="hidden">
              	<h1>Sidesword</h1>
				<h4>Historically</h4>
				<p>Sidesword is the weapon which bridges the gap between the longsword and the rapier. It's one-handed and usually features a cross guard, finger ring guard, and knuckle protection. They were intended to be easy to carry on ones belt in day to day life, hence the name sidesword ie. the sword carried at your side.
				<h4>Today</h4>
				<p>Sidesword is most often taught based on the teachings of the Bolognese master Achille Marozzo, which he documented in his extensive book 'Opera Nova'. They are often combined with an off hand implement such a small shield (buckler) or a parrying dagger. In modern HEMA sidesword is the Italian analogue to the German messer.
            </div>

            <div id="wrestling" class="hidden">
                <h1>Hand to Hand</h1>
				<p>Just like today, the most commonly encountered mode of combat throughout history has always been hand to hand combat. From Roman-Grecco wrestling to Victorian era pugilism and boxing, modern HEMA practioners have a wide array of systems to choose from. Most of the historical sword fighting manuals also contain sections on hand to hand combat, and techniques for forcing your opponent into it by wrestsling their swords away from them. Withtin the HEMA community unarmed combat is often reffered to as 'Ringen' (German) or 'Abrazare' (Italian) which both roughly transalte to 'Grapping'; and are featured quite often in some of the largest HEMA tournaments.
            </div>

            <div id="messer" class="hidden">
                <h1>Langes Messer</h1>
                <h4>Historically</h4>
				<p>The langes messer is a one handed sword with a single edged blade and a simple cross guard and thumb protector. It features some odd design design choices compared to other weapons of its time due to it being an evolution of working knife. In fact 'langes messer' is German for 'long knife'. Because it was classified as a knife and not a sword, knife makers in late middle ages Germany were able to sell them to the lower classes and they became a popular weapon throught western europe.
				<h4>Today</h4>
				<p>The langes messer is common sight in modern HEMA schools which teach from German historical sources. Most schools teach from the documents written by Hans Talhofer as well as from a compilation of fight books known as the 'Codex Wallerstein'. In modern HEMA it is the German analogue to the Italian sidesword.
            </div>

            <div id="other" class="hidden">
            <h1>Other</h1>
            	<div id = "summary">
                <p>Some of the other popular weapons in modern HEMA include:
                <ul>
                	<li>Great Sword - extremly long double edged straight sword with a simple cross guard and double length handle</li>
                	<li>Arming Sword - single hand double edged straight sword with a simple cross guard</li>
                	<li>Sabre - single hand single edged curved or straight sword with an enclosed hand guard or knuckle bow</li>
                	<li>Dussack - single hand single edged curved short sword with a knuckle bow</li>
                	<li>Polearm - a variety of weapons which are a long pole with some type of blade or hammer at the end</li>
                	<li>Quarter Staff - a long wooden pole</li>
                	<li>Singlestick - short wooden sticks, sometimes with leather hand protection</li>
                </ul>
                </div>
				<div id = "pic">
					<img src = "../../content/sabre2.jpg" alt = "A steel Hutton style sabre and matching scabbard." width = "260" height = "195">
				</div>

            </div>
		</div>	
	</main>
	
	<footer>
		<div id="footercontent">
			&copy; 2017 COMP 1536 Project 
			<a href="../../sitemap/sitemap.php" >Site Map</a>
		</div>
	</footer>
</body>
</html>
