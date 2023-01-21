<?php
	if (!empty($_POST['passwordA']) and !empty($_POST['loginA'])) {
		$login = $_POST['loginA'];
		$password = $_POST['passwordA'];
		
		$query = "SELECT * FROM users WHERE login='$login' 
			AND password='$passwordA'"; 
		$result = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($result);
		
		if (!empty($user)) {
		    echo 'дятел';
		} else {
			echo 'помидоры';
		}
	}
?>