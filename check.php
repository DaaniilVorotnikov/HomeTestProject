<?php
	$login = filter_var(trim($_POST['login']), 
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), 
	FILTER_SANITIZE_STRING);
	$password2 = filter_var(trim($_POST['password2']), 
	FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 3 || mb_strlen($login) > 10){
	echo "incorrect name";
	exit();
	} else if (mb_strlen($password) <= 4){
	echo "The password is too short";
	exit();
	} else if ($password != $password2){
	echo "Passwords mismatch";	
	exit();
}

$password = md5($password."guijkggsdgllp67");

$password2 = md5($password2."guijkggsdgllp67");



$mysql = new mysqli('localhost', 'root', 'root', 'Rg_BD');
$mysql -> query("INSERT INTO `users` (`name`, `password`, `password2`)
VALUES('$login', '$password', '$password2')");

$mysql -> close();

header('Location: /');

?>
