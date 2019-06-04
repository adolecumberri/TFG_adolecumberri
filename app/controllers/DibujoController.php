<?php

include 'app/models/DibujoModel.php';
class DibujoController extends Controller {

	public function __construct() {
		//a priori nada por aqui
	}
	public function grid() {
		$objDibujo = new DibujoModel();
		$retorno = $objDibujo->getAll();
		$this->setView('dibujos.tpl.php');
		/*var_dump($retorno);
		die();*/
		return $retorno;
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
				   					<h2>Lo que dibujamos,</h2>
				   					<h1>Nuestro Arte</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	';
		return $retorno;
	}
}