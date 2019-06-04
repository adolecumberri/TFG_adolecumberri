<!DOCTYPE HTML>
<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Ado Lecumberri</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="" />
			<meta name="keywords" content="" />
			<meta name="author" content="Adolfo Reyes Agustin" />

			<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

			<link rel="shortcut icon" href="favicon.ico">

			<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">

			<!-- Animate.css -->
			<link rel="stylesheet" href="res/css/animate.css">
			<!-- Icomoon Icon Fonts-->
			<link rel="stylesheet" href="res/css/icomoon.css">
			<!-- Bootstrap  -->
			<link rel="stylesheet" href="res/css/bootstrap.css">
			<!-- Flexslider  -->
			<link rel="stylesheet" href="res/css/flexslider.css">
			<!-- Flexslider  -->
			<link rel="stylesheet" href="res/css/flexslider.css">
			<!-- Owl Carousel -->
			<link rel="stylesheet" href="res/css/owl.carousel.min.css">
			<link rel="stylesheet" href="res/css/owl.theme.default.min.css">

			<link rel="stylesheet" href="res/css/style.css">
			<script src="res/js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
	<!-- Boton arriba izquierda-->
	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<ul>
					<li><a href="?c=Home&m=grid">Home</a></li>
					<li><a href="?c=Blog&m=grid">Blog</a></li>
					<li><a href="?c=Dibujo&m=grid">Dibujo</a></li>
					<li><a href="?c=Personal&m=grid">Informacion Personal</a></li>
					<!-- <li><a href="?c=Home&m=index">TFG</a></li> -->
				</ul>
			</div>
		</div>
	</nav>
	<div id="colorlib-page"> <!-- Este div se cierra en el footer-->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.html">Adolfo Lecumberri</a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				<?=$objController::loadHeader();?>
			  	</ul>
		  	</div>
		</aside>