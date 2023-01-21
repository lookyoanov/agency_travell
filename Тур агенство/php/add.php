 <?php // Добавление туров в БД 
	$name_tur = $_POST['name_tur'];
	$description = $_POST['description'];

	$add = "INSERT INTO tur (name, description) VALUES ('$name_tur','$description')"; 
	mysqli_query($link, $add) or die(mysqli_error($link));

	$nameM = $_POST['nameM'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$addM = "INSERT INTO users (name, surname, email, login, password) VALUES ('$nameM','$surname','$login','$email','$password')"; 
	mysqli_query($link, $addM) or die(mysqli_error($link));
?>