<?php

class BlogController extends Controller {

	public function __construct() {
		//nada por ahora
	}
	public function index() {
		$this->setView('blog.tpl.php');
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
				   					<h2>Sobre qué escribimos</h2>
				   					<h1>Nuestros Blogs</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	';
		return $retorno;
	}

}
