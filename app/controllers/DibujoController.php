<?php
include_once 'app/models/DibujoModel.php';
class DibujoController extends Controller {

	public function __construct() {
		$objDibujo = new DibujoModel();
		$numCol = $objDibujo->getColNum();
		$numPag = intval((($numCol + 5) / 6) - 1); //pageCount = (records + recordsPerPage - 1) / recordsPerPage;
		setcookie('maxPagDibujos', $numPag);

	}

	public function grid() {
		$objDibujo = new DibujoModel();
		if (isset($_REQUEST['page'])) {
			$retorno = $objDibujo->getAll($_REQUEST['page']);
		} else {
			$retorno = $objDibujo->getAll('1');
		}

		$this->setView('dibujos.tpl.php');
		return $retorno;
	}

	public function show() {
		$id = $_REQUEST['page']; // el 3º valor se llama page. pero en realidad es la ID.
		$objDibujo = new DibujoModel();
		$retorno = $objDibujo->getOne($id);
		$this->setView('dibujo.tpl.php');
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
	public static function cargarRelacionados($categoria) {
		$retorno = '';

		return $retorno;
	}
}