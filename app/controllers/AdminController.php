<?php
include_once 'app/controllers/cookieController.php';
include_once 'app/models/AdminModel.php';
class AdminController extends Controller {

	public function __construnc() {
		//constructor vacio, por ahora.

	}
	public function index() {
		CookieController::borrarCookie("exist");
		CookieController::borrarCookie("nombre");

		$retorno = false;
		if (isset($_SESSION['exist'])) {
			$retorno = true;
		}
		return $retorno;

	}
	public function login() {

		if (isset($_POST['nick'])) {
			//Consulta a la BBDD e identificación ($obj OR false)
			$objUser = new AdminModel();
			$usuario = $objUser->login($_POST['nick'], $_POST['password']);

			//redireccionamientos:
			if ($usuario === false) {
				header("Location: " . base_url . "admin/index/0");
				exit;
			} else {
				//crear $_SESSION
				cookieController::crearCookie("exist", true);
				cookieController::crearCookie("nombre", true);

				//REDIRECCIONAR
				header("Location:" . base_url . "admin/panel/0");
				exit;

			}

		}

		header("Location:" . base_url . "index.php");
		exit;
	}

	public static function loadHeader() {
		$retorno = '
		<!-- pagina 1-->
			   	<li style="background-image: url(' . base_url . 'res/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">
				   					<h2>Bienvenidos</h2>
				   					<h1>Administradores !</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	';
		return $retorno;
	}

	public static function panel() {
		$retorno = '<p> Hola </p>';

		return $retorno;
	}
	public function adminDibujos() {
		$retorno = array();
		$objCat = new CategoriaController();
		$retorno += ['categorias' => $objCat->getAll()];

		$objDibujo = new DibujoController();
		$retorno += ['dibujos' => $objDibujo->getAll()];

		$objBlog = new BlogController();
		$retorno += ['blogs' => $objBlog->getAll()];

		return $retorno;
	}

	public function adminBlogs() {
		$retorno = array();
		$objCat = new CategoriaController();
		$retorno += ['categorias' => $objCat->getAll()];

		$objDibujo = new DibujoController();
		$retorno += ['dibujos' => $objDibujo->getAll()];

		$objBlog = new BlogController();
		$retorno += ['blogs' => $objBlog->getAll()];

		return $retorno;
	}
	public function adminCategorias() {
		//Hacer movidas.
		$objCat = new CategoriaController();
		return $objCat->getAll();

	}
	public function borrarCategorias() {

		if (isset($_POST['nombreBorrar']) && $_POST['nombreBorrar'] != '') {
			$objCat = new CategoriaController();
			$objCat->borrarCategoria($_POST['nombreBorrar']);
			die();

		}
	}

	public function crearCategorias() {
		if (isset($_POST['nombreAdd']) && $_POST['nombreAdd'] != '') {
			$objCat = new CategoriaController();
			$objCat->crearCategorias($_POST['nombreAdd']);
			die();

		}
	}

	public function addDibujo() {
		var_dump($_POST);
		var_dump($_FILES);
		die();

	}
	public function deleteDibujo() {
		var_dump($_POST);
		die();
	}
	public function alterDibujo() {
		var_dump($_POST);
		die();
	}

}
