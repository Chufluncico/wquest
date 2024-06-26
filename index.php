<!doctype html>
<html lang="en">

<head>
	<!-- SCRIPT PARA ACTIVAR EL MODO CLARO-OSCURO -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Description">
	<meta name="author" content="Chuflun">
	<title>Title</title>
	<link rel="shortcut icon" href="img/brand.svg">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/cartas.css">
	<!-- ICONOS DE GOOGLE -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<!-- FUENTE DE GOOGLE -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet"> 
	<meta name="robots" content="noindex">
</head>

<body>
	<?php require("functions.php"); ?>


	<nav class="navbar app-navbar navbar-expand-lg sticky-top">
		<?php include("navbar.php"); ?>
	</nav>

	<div class="container-fluid mt-4">
  		<div class="row">

  			<aside class="app-sidebar col-lg-3 col-xl-2">
  				<?php include("sidebar.php"); ?>
  			</aside>

  			<main class="app-main col-lg-9 col-xl-10 pb-5">

  				<?php 
					$page = $_GET["page"];

					if ($page) {
						include($page.'.php');
					}else{
						include("welcome.php");
					}
				?>  				

  			</main>

  		</div>
  	</div>
	
	<footer class="py-4 py-md-5 mt-0 bg-body-tertiary">
		<?php include("footer.php"); ?>  
	</footer>
    

<!-- SCRIPTS -->

<!-- JQUERY -->
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- HTML 2 CANVAS CDN -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<!-- GUARDAR HTML A PNG -->
<script src="js/saveToPng.js"></script>
<!-- AJUSTAR TAMAÑO FUENTE SEGUN ALTO Y ANCHO DEL CONTENEDOR -->
<script src="js/textFit.js"></script>

</body>
</html>