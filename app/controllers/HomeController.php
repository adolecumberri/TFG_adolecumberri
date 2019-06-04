<?php

class HomeController extends Controller {

	public function __construct() {

	}

	public function grid() {
		$this->setView('home.tpl.php');

	}
	public static function loadHeader() {
		$retorno = '
		<!-- pagina 1-->
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Bienvenidos &amp; a mi TFG</h2>
				   					<h1>¡Hola! Soy Adolfo Reyes un desarrollador de aplicaciones</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<!-- pagina 2-->
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   	<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Ofrecemos...</h2>
				   					<h1>Esta página mostrará un CRUD de contenido</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<!-- pagina 3-->
			   	<li style="background-image: url(images/img_bg_3.jpg);">
				<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>y también...</h2>
				   					<h1>ademas de la propia presentación de mi TFG</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	';
		return $retorno;
	}

}
