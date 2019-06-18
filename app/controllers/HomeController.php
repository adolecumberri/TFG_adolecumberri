<?php
include_once 'app/models/HomeModel.php';
class HomeController extends Controller {

	public function __construct() {
		$objHome = new HomeModel();
		$numCol = $objHome->getColNum();
		$numPag = intval((($numCol + 5) / 6) - 1); //pageCount = (records + recordsPerPage - 1) / recordsPerPage;
		setcookie('maxPagHome', $numPag);

	}

	public function grid() {
		$objBlog = new HomeModel();
		if (isset($_REQUEST['page'])) {
			$retorno = $objBlog->getPage($_REQUEST['page']);
		} else {
			$retorno = $objBlog->getPage('1');
		}

		$this->setView('home.tpl.php');

		return $retorno;

	}
	public static function loadHeader() {
		$retorno = '
		<!-- pagina 1-->
			   	<li style="background-image: url(' . base_url . '/res/images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner  text-shadow">
				   					<h2>Bienvenidos &amp; a mi TFG</h2>
				   					<h1>¡Hola! Soy Adolfo Reyes un desarrollador de aplicaciones</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<!-- pagina 2-->
			   	<li style="background-image: url(' . base_url . 'res/images/img_bg_2.jpg);">
			   	<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner text-shadow">
				   					<h2>Ofrecemos...</h2>
				   					<h1>Esta página mostrará un CRUD de contenido</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<!-- pagina 3-->
			   	<li style="background-image: url(' . base_url . 'res/images/img_bg_3.jpg);">
				<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner text-shadow">
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
