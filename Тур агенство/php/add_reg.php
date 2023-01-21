<?php
	$nameM = $_POST['nameM'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$add = "INSERT INTO users (name, surname, email, login, password) VALUES ('$nameM','$surname', $login, $email, $password)"; 
	mysqli_query($link, $add) or die(mysqli_error($link));
?>