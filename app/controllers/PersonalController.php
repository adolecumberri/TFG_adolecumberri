<?php

class PersonalController extends Controller {

	public function __construct() {

	}

	public function index() {
		$this->setView('personal.tpl.php');

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
				   					<h2>Información Personal</h2>
				   					<h1>Aquí me presento</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>

			   	';
		return $retorno;
	}

}
