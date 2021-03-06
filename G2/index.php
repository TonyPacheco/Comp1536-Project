<?php
	include 'forum/functions.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HEMA</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="style/base.css">
</head>
<body>
	<header>
		<h1>HEMA</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				
				<li class="dropdown">
					<a href="#" class="button">HEMA</a>
					<div class="menu">
						<a href="hema/abouthema/abouthema.php">About HEMA</a>
						<a href="hema/hemastyles/hemastyles.php">HEMA Styles</a>
						<a href="hema/hemainbc/hemainbc.php">HEMA in BC</a>
					</div>
				</li>
				
                <li><a href="aboutus/aboutus.php">About Us</a></li>
				
			</ul>
		</nav>
		
		<div id="login">
		<?php
			if (isLoggedIn()){
				echo 'Welcome, '. $_SESSION['SESS_FIRST_NAME'] . '  |  ';
				echo '<a href="forum/logout.php">Logout</a><br/>';
			} else {
				echo '<a href="login/loginorsignup.php">Login / Signup</a>';
			}
		?>

		</div>
		    
	</header>
	
	<main>
		<div id="wrapper">
			<img id="bannerimg" src = "content/fenestraBanner.png" alt = "Two longsword fencers locked in a high bind.">
			<div id="indexWhatIs">
				<h1>What Is HEMA?</h1>
				<p>HEMA stands for Historical European Martial Arts, and as the name implies it's a collection of combat arts with their origins rooted in historical Europe. Disciplines range from the earliest known medieval sword &amp; axe fighting manuals (circa 1400) to late Victorian era boxing and self-defense systems.</p>
				<p>Unlike Eastern martial arts, the traditions and schools of most European martial arts were lost to time, so the focus of HEMA is the rediscovery and revival of these ‘dead’ arts. Practitioners study manuals written by the old masters of their arts and from these manuals, they reconstruct the fighting systems and teach others.</p>
				<p>As a sport HEMA has been growing quickly since a boom in awareness of the study of what is often refferred to simply as 'swordfighting'. A combination of common access to the interenet allowing direct access to historical sources, and the emergence of HEMA clubs and schools, means that learning the 'forgotten' arts of everything from longsword duelling to umbrella self defence is more acccessible than ever.</p>
			</div>
			<div id="indexImg">
				<h1>Picture Of The Day</h1>
				<img src = "content/rapiervlongsword1.jpg" alt="Two fencers in guard, one with a rapier and the other with a longsword." width=405 height=405>
			</div>
		</div>	
	</main>
	
	<footer>
		<div id="footercontent"> 
			&copy; 2017 COMP 1536 Project  
			<a href="sitemap/sitemap.php">Site Map</a>
		</div>
	</footer>
</body>
</html>
