<?php
	$login = filter_var(trim($_POST['login']), 
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), 
	FILTER_SANITIZE_STRING);
	
$password = md5($password."guijkggsdgllp67");


$mysql = new mysqli('localhost', 'root', 'root', 'Rg_BD');


$result = $mysql->query("SELECT * FROM `users` WHERE 
`name` = '$login' AND `password` = '$password'");

$user = $result->fetch_assoc();
if(count($user) == 0) {
	echo "User is not found";
	exit();
}

setcookie('user', $user['name'], time() + 3600 * 24 * 365, "/");


$mysql -> close();

header('Location: /');

?>
