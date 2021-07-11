<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widh=device-widh, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap"> 
	<title>Registration</title> 
</head>

<body>
	<header class="header">
	<div class="container">
		<div class="header_inner">
			<div class="header_logo"><b>Weather</b></div>		
			<nav class="nav">
				<a class="nav_link" href="index.php">Main</a>
				<a class="nav_link" href="info.php">Info</a>
				<a class="nav_link" href="login.html">Login</a>
			</nav>
		</div>
	</div>
</header>

<content> 
	<div class="getter">

		<a class="nav_link" href="weather.php">Get weather</a> 		
	</div>
		<div class="registration">
		<div class="scroll">	
			<?php
			$a = "localhost";
			$b = "root";
			$c = "root";
			$d = "weather";

			$induction = mysqli_connect($a, $b, $c, $d);

			$mysql2 = new mysqli('localhost', 'root', 'root', 'weather');
			$result = mysqli_query($induction, "SELECT * FROM `record` ");

			while ($userweather = mysqli_fetch_assoc($result)) {
			echo $userweather['id'];
			echo " ";
			echo $userweather['username'];
			echo " ";
			echo $userweather['data'];
			echo "<br>";
			}

			?>
		</div>
	</div> 

</content>
		
<footer class="footer">
	<div class="container">
		<div class="footer_inner">
			<div class="user-name">
			<p><div class="nav"><?=$_COOKIE['user']?> <a class="reg_nav_link" href="/exit.php">Exit </a></div></p> 
		</div>
	</div>
</div>

</footer>
</body>
</html>