		<?php
			$a = "localhost";
			$b = "root";
			$c = "root";
			$d = "weather";

			$induction = mysqli_connect($a, $b, $c, $d);

			$mysql2 = new mysqli('localhost', 'root', 'root', 'weather');
			$result = mysqli_query($induction, "SELECT * FROM `record` ");

			while ($userweather = mysqli_fetch_assoc($result)) {
			
			$un = $userweather['username'];
			requir_once('info.php');
			$ud = $userweather['data'];
			requir_once('info.php');
			$fn = $userweather['filename'];
			requir_once('info.php');
			}

			?>


			<?php
			$a = "localhost";
			$b = "root";
			$c = "root";
			$d = "weather";

			$induction = mysqli_connect($a, $b, $c, $d);

			$mysql2 = new mysqli('localhost', 'root', 'root', 'weather');
			$result = mysqli_query($induction, "SELECT * FROM `record` ");

			while ($userweather = mysqli_fetch_assoc($result)) {
			
			$un = $userweather['username'];
			$ud = $userweather['data'];
			$fn = $userweather['filename'];
			}

			?>
	<div class="registration">
		<div> Weather's get history </div>
		<div class="scroll">	
		<p><font><?php echo $un?></font><font><?php echo $ud ?></font> <a href="<?php echo $fn?>" download=""> download </a> </p>	