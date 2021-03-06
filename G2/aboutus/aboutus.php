<?php
	include '../forum/functions.php';
	
	session_start();
	
	define('DB_HOST', 'bcitdevcom.ipagemysql.com');
    define('DB_USER', 'comp15362014');
    define('DB_PASSWORD', '2014-1536');
    define('DB_DATABASE', '1536forum');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="../style/base.css">
</head>
<body>
	<header>
		<h1>About Us</h1>    
		<nav>
			<ul>
                <li><a href="../index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="button">HEMA</a>
                  <div class="menu">
                    <a href="../hema/abouthema/abouthema.php">About HEMA</a>
				    <a href="../hema/hemastyles/hemastyles.php">HEMA Styles</a>
				    <a href="../hema/hemainbc/hemainbc.php">HEMA in BC</a>
                  </div>
                </li>
                <li><a href="#">About Us</a></li>
            </ul>
		</nav>
    <div id="login">
		<?php
			if (isLoggedIn()){
				echo 'Welcome, '. $_SESSION['SESS_FIRST_NAME'] . '  |  ';
				echo '<a href="../forum/logout.php">Logout</a><br/>';
			} else {
				echo '<a href="../login/loginorsignup.php">Login / Signup</a>';
			}
		?>

		</div>
	</header>
	
	<main>	
		<div id="wrapper">
			<div id="imgplaceholder">
                
                <img src = "../content/us1.jpg" width=50% alt = "Our team, smiling, not a care in the world.">

			</div>
			
			<div id="teamwrapper">
				<table id="team">
				
				<caption>Meet The Team</caption>
				
					<tr class="team_row">
						<th class="team_h">Name</th>
						<th class="team_h">About the team member</th>
					</tr>
					<tr class="team_row">
						<td class="team_d">Prabhvir Saran</td> 
						<td class="team_d">Prabject Supervisor, slack team lead, and wearer of red.</td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Bhagwan Singh Virdi</td> 
						<td class="team_d">Human Male.</td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Tony Pacheco</td>
						<td class="team_d">Team's resident HEMA'ist and haver of good times.</td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Liam Maclntyre</td> 
						<td class="team_d">Cheif code wizard, tamer of PHP, and handler of exceptions.</td>
					</tr>
					<tr class="team_row">
						<td class="team_d">Jaisreet Khaira</td> 
						<td class="team_d">Milestone wrangler and documentation fiend.</td>
					</tr>	
				</table>
            </div>
			<div id="comment">
				<h3>Contact us</h3>
                <form method="post" action="http://webdevfoundations.net/scripts/formdemo.asp">
                    <table id="commentstable">
                        <tr>
                            <td>
                            <label for="firstlast">Name:</label><br>
                            <input id="firstlast" type="text" name="Name" required>
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                            <label for="email">Email:</label><br>
                            <input id="email" type="email" name="email" required>
                            </td>
                            <td id="forumcell" rowspan="2">
                        <tr>
                            <td>
                                <label for="comments">Comments:</label><br>
                                <textarea id="comments" rows="5" name="comments" required></textarea><br><br>
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </form>
			</div>
			<div id="forum">
				<h3>User Forums</h3>
				
					<?php
						if (isLoggedIn()){
							echo '<h4><a href="../forum/forum.php">Go to forum</a></h4>';
							echo '<h4><a href="../forum/add_topic_form.php">Create new topic</a></h4>';
						} else {
							echo '<h3>Please login to view Forums</h3>';
						}
					?>

					<ul>
						<?php
							$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
							$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
							$count = min(5, mysqli_num_rows($result));
							if($count==0)
								echo "<li>No topics</li>";
							else
								for($i=0; $i < $count; $i++){
									$row=mysqli_fetch_array($result);
									echo '<li><a href="../forum/view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
								}
					?>
				</ul>
			</div>
		</div>			
	</main>
	
	<footer>
  	<div id="footercontent"> 
			&copy; 2017 COMP 1536 Project
			<a href="../sitemap/sitemap.php">Site Map</a>
    </div>
	</footer>

	<script type="text/javascript" src="aboutus-validate.js"></script>
</body>
</html>
