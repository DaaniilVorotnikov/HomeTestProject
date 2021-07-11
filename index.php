<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widh=device-widh, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap"> 
	<script type="weathervision.js" defer></script>
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
				<a class="nav_link" href="login.php">Login</a>
			</nav>
		</div>
	</div>
</header>
<?php 
if($_COOKIE['user'] == TRUE):
?>
 <content class="content">
 			<div class="panel"> 
 				<p class="city"></p>
 				<hr>
 				<p class="temp"></p>
 				<hr>
 				<p class="details"></p>
				</div>
 	<script src="weathervision.js"></script>
 				<div class="panel2"> 
 				<p class="city2"></p>
 				<hr>
 				<p class="temp2"></p>
 				<hr>
 				<p class="details2"></p>
				</div>
 	<script src="w2.js"></script>
 	<div class="panel3"> 
 				<p class="city3"></p>
 				<hr>
 				<p class="temp3"></p>
 				<hr>
 				<p class="details3"></p>
				</div>
 	<script src="w3.js"></script>
 	<div class="panel4"> 
 				<p class="city4"></p>
 				<hr>
 				<p class="temp4"></p>
 				<hr>
 				<p class="details4"></p>
				</div>
 	<script src="w4.js"></script>
 	<div class="panel5"> 
 				<p class="city5"></p>
 				<hr>
 				<p class="temp5"></p>
 				<hr>
 				<p class="details5"></p>
				</div>
 	<script src="w5.js"></script>
 </content>
 <?php endif;?>	
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