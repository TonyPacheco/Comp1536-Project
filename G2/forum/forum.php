<?php
	include 'functions.php';
	session_start();
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name

	//Question 1c - modify our SQL statement to get poster name.

	$sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HEMA</title>
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link rel="stylesheet" href="../style/base.css">
	</head>
	<body>
		<header>
			<h1>HEMA</h1>
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
					
	                <li><a href="../aboutus/aboutus.php">About Us</a></li>
					
				</ul>
			</nav>
			
			<div id="login">
			<?php
				if (isLoggedIn()){
					echo 'Welcome, '. $_SESSION['SESS_FIRST_NAME'] . '  |  ';
					echo '<a href="logout.php">Logout</a><br/>';
				} else {
					echo '<a href="../login/loginorsignup.php">Login / Signup</a>';
				} 
			?>

			</div>
			    
		</header>
		<main>
			<div id="forumdiv">
				<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
				<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
				<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
				<td width="7%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>

				<!-- Question 1c - add user name header-->
				<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
				</tr>

				<?php
				while($rows=mysqli_fetch_array($result)){ // Start looping table row
				?>

				<tr>
				<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
				<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
				<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

				<!-- Question 1c - add user name here. -->
				<td align="center" bgcolor="#FFFFFF"><?php echo $rows['firstname']; ?></td>
				</tr>

				<?php
				// Exit looping and close connection
				}
				((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
				?>
				<tr>
				<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
				</tr>
				</table>
			</div>	
		</main>
		<footer>
			<div id="footercontent"> 
				&copy; 2017 some students 
				<a href="sitemap/sitemap.php">Site Map</a>
			</div>
		</footer>
	</body>
</html>