<?php
include_once 'app/models/DibujoModel.php';
class DibujoController extends Controller {

	public function __construct($crearCookie = true) {
		if ($crearCookie) {
			$objDibujo = new DibujoModel();
			$numCol = $objDibujo->getColNum();
			$numPag = intval((($numCol + 5) / 6) - 1); //pageCount = (records + recordsPerPage - 1) / recordsPerPage;
			header("Content-Type: text/html; charset=UTF-8");
			if (!isset($_COOKIE['maxPagDibujos'])) {
				setcookie('maxPagDibujos', $numPag);
			} else { //nothin
			}

		}

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
			   	<li style="background-image: url(' . base_url . '/bg3.jpg);">
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

	public function createDraw($values) {
		$retorno = "insert into dibujos ( ";
		foreach ($values as $key => $value) {
			$retorno .= "`" . $key . "`, ";

		}
		$retorno .= "`deleted` ) ";
		$retorno .= "VALUES ( ";
		foreach ($values as $key => $value) {
			$retorno .= "'" . $value . "', ";
		}
		$retorno .= "0 )";

		$dibujoModel = new DibujoModel();
		return $dibujoModel->insertQuery($retorno);
	}

	public function updateDraw($values) {
		$retorno = "update  dibujos set  ";
		foreach ($values as $key => $value) {
			if ($key == 'img' || $key == 'has_full') {
				$retorno .= "`" . $key . "` = '" . $value . "', ";
			} else {
				$retorno .= "`" . $key . "` = " . $value . ", ";
			}

		}
		$retorno .= "`deleted` = 0  ";
		$retorno .= " where id = " . $values['id'] . ";";
		$dibujoModel = new DibujoModel();
		return $dibujoModel->insertQuery($retorno);
	}

	public function getOne($id) {
		$modelDib = new DibujoModel();
		$query = " SELECT * FROM `dibujos` where id = $id;";
		$retorno = $modelDib->rawQuery($query);
		return $retorno;
	}

	public function getAll() {
		$modelDib = new DibujoModel();
		$query = " SELECT `id`, `titulo` FROM `dibujos`;";
		$retorno = $modelDib->rawQuery($query);
		return $retorno;
	}
	public function borrarDibujo($id) {
		$modelDib = new DibujoModel();
		$query = "DELETE FROM `dibujos` WHERE id = " . $id . ";";
		$modelDib->insertQuery($query);
		header("Location:" . base_url . "admin/adminDibujos/0");
	}
}