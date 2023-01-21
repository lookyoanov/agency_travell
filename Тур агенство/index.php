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
		    <a class="navbar-brand" href="index.php">Главная</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link active" aria-current="page" href="ls.php">Личный кабинет</a>
		        <a class="nav-link" href="#zagolovok">Портфолио</a>
		      </div>
		    </div>
		  </div>
		   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalV">
				  Войти
			</button>
		    <button type="button" class="btn btn-primary zareg" data-bs-toggle="modal" data-bs-target="#exampleModalZ">
				  Зарегестрироваться
			</button>
		</nav>
	</header>
	<!--<img class="logo" src="img/travel.png" class="d-block w-100" alt="...">-->
	<div class="chapter">

		   <div class="container">
			  <div class="row">
			    <div class="col-12" id="chap"><b>Туристическое агенство TRAVEL</b></div>
			  </div>
			</div>

		   <div class="container">
			  <div class="row">
			    <div class="col-9" id="text"><b>«Посмотри на мир. Он куда удивительнее cнов»<br>Рэй Брэдберри</b></div>
			    <div class="col-3" id="bottom"><a class="seeorder"><b>ПРИОБРЕСТИ ТУР</b></a></div>
			  </div>
			</div>
	</div>
      <div class="container">
			  <div class="row">
			    <div class="col-12" id="zagolovok"><b>Горячие туры от TRAVEL</b></div>
			  </div>
			</div>

	<div class="blok">
		<?php
		 require 'php/config.php';
		?>
		<div class="kartochki">
			<div class="container">
			<div class="row">
			<?php
				require 'php/select.php';
			?>
			</div>
			</div>
		</div>


	<div class="container">
	  <div class="row">
	    <div class="col-12" id="zagolovok"><b>Наше портфолио</b></div>
	  </div>
	</div>

</div>

            <div class="container">
			  <div class="row">
			    <div class="col-4" id="portf">
			    	 <img src="img/3картинка.jpg" class="card-img-top" alt="...">
			    </div>
			    <div class="col-4" id="portf">
			    	 <img src="img/1картинка.jpg" class="card-img-top" alt="...">
			    </div>
			    <div class="col-4" id="portf">
			    	 <img src="img/6картинка.jpg" class="card-img-top" alt="...">
			    </div>
			  </div>
			</div>
			<div class="container">
			  <div class="row">
			    <div class="col-4" id="portf">
			    	 <p class="text_portf"><b>Как мы ездили в антарктиду</b></p>
			    </div>
			    <div class="col-4" id="portf">
			    	 <p class="text_portf"><b>Как мы ездили в антарктиду</b></p>
			    </div>
			    <div class="col-4" id="portf">
			    	 <p class="text_portf"><b>Как мы ездили в антарктиду</b></p>
			    </div>
			  </div>
			</div>
			<?php
			require 'php/footer.php';
			?>
            <?php
			require 'php/modal.php';
			?>
</body>
</html>