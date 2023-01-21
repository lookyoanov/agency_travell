<?php
ini_set('display_errors', 'off');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Туристическое агенство</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light color">
		  <div class="container-fluid">
		    <a href="index.php" class="navbar-brand" ata-bs-toggle="modal" data-bs-target="#exampleModal">Главная</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link active" aria-current="page" href="#">Тур</a>
		        <a class="nav-link" href="#">Портфолио</a>
		      </div>
		    </div>
		  </div>
		   <h5>Алексей Лукьянов</h5>
		    <button type="button" class="btn btn-primary zareg" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  	ВЫЙТИ
			</button>
		</nav>
	</header>
		<?php
		 require 'php/config.php';
		?>
 <div class="container">
			  <div class="row">
			    <div class="col-12" id="zagolovok"><b>Личный кабинет</b></div>
			  </div>
 </div>


<div class="container">
			  <div class="row">
			    <div class="col-9" id="article"><b>Добавть новый тур</b></div>
			    <div class="col-3" id="zagolovok">Мои туры</div>
			  </div>
</div>
<div class="container">
			  <div class="row">
			    <div class="col-6" id="article">
							<form method="post">
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">Название тура</label>
							    <input  method="post" type="text" class="form-control"aria-describedby="emailHelp" name="name_tur" id="name_tur">
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">Описание тура</label>
							    <input method="post" type="text" class="form-control"aria-describedby="emailHelp" name="description">
							  </div>
							  <button type="submit" class="btn btn-primary">Опубликовать тур</button>
							</form>
			    </div><div class="col-2" id="zagolovok"></div>
			    <div class="col-4" id="zagolovok">
			    	 <?php //Вывод карточек с турами
					    $query = ('SELECT * FROM `tur` ORDER BY `id_tur` DESC');
						$result = mysqli_query($link, $query);

						for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

						$count = array_key_last($data);  
						for($i=0;$i<=$count; $i++){
							echo '<ul class="list">';
							echo '<li>'.($data[$i][name]).'</li>';
							echo '</ul>';
						}
					?>
			    </div>
			  </div>
</div>
    <?php
		require 'php/add.php';
    ?>
	<?php
		require 'php/footer.php';
	?>
</body>
</html>