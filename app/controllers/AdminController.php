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
		$nombreFile = '';

		//comprobación de tipos de imagen.
		if ($_FILES['imgMain']['error'] != '4') {
			$tipoFile = '';
			$nombreFile = gmdate('Y-m-d', time() + 7200) . "" . $this::camelCase($_FILES['imgMain']['name']);
			$tipoFile = $_FILES['imgMain']['type'];
			switch ($tipoFile) {
			case 'image/jpg':
				$tipoFile = '.jpg';
				break;
			case 'image/jpeg':
				$tipoFile = '.jpeg';
				break;
			case 'image/png':
				$tipoFile = '.png';
				break;
			case 'image/gif':
				$tipoFile = '.gif';
				break;
			default:
				echo "<h1> querido admin, foto de formato incorrecto. :) </h1>";
				header("Refresh: 5; URL=admin/adminDibujo/0");
				break;

			}
		}

		$nombreFull = '';
		$tipoFull = '';

		//Si existe FULL, la guardo.

		if (isset($_FILES['imgHas_full'])) {
			$nombreFull = gmdate('Y-m-d', time() + 7200) . "" . $this::camelCase($_FILES['imgHas_full']['name'] . "_FULL");
			$tipoFull = $_FILES['imgHas_full']['type'];
			switch ($tipoFull) {
			case 'image/jpg':
				$tipoFull = '.jpg';
				break;
			case 'image/jpeg':
				$tipoFull = '.jpeg';
				break;
			case 'image/png':
				$tipoFull = '.png';
				break;
			case 'image/gif':
				$tipoFull = '.gif';
				break;
			default:
				echo "<h1> querido admin, foto de formato incorrecto. :) </h1>";
				header("Refresh: 5; URL=admin/adminDibujo/0");
				break;

			}

		} else {
			unset($nombreFull);
			unset($tipoFull);
		}

		// no meto ni ID ni ID_PADRE
		$values = array(
			"date" => gmdate('Y-m-d', time() + 7200),
			"titulo" => $_POST['titulo'] ? $_POST['titulo'] : null,
			"id_texto" => $_POST['id_texto'] ? $_POST['id_texto'] : null,
			"is_texto" => $_POST['is_texto'],
			"id_categoria" => $_POST['id_categorias'] ? $_POST['id_categorias'] : null,
			"img" => $nombreFile . $tipoFile,
			"has_full" => $_FILES['imgHas_full']['name'] ? $nombreFull . $tipoFull : null,
		);

		//creación del objeto.
		$objDibujo = new DibujoController(false);
		$inserted = $objDibujo->createDraw($values);
		if (true) {

			var_dump($tipoFile);
			$tmp_name = $_FILES['imgMain']['tmp_name'];
			$movido1 = move_uploaded_file($tmp_name, "res/images/" . $values['img']);
			if (isset($_FILES['imgHas_full'])) {
				$tmp_name = $_FILES['imgHas_full']['tmp_name'];
				$movido2 = move_uploaded_file($tmp_name, "res/images/" . $values['has_full']);
			}
		};
		header("Location: " . base_url . "admin/adminDibujos/0");

	}
	public function borrarDibujo() {

		if (isset($_POST['borrarDibujo']) && $_POST['borrarDibujo'] != '') {
			$objDibujo = new DibujoController();
			$objDibujo->borrarDibujo($_POST['borrarDibujo']);
			die();

		}
	}
	public function alterDibujo() {

		//comprobación de tipos de imagen.
		$nombreFile = '';
		$tipoFile = '';
		if ($_FILES['imgMain']['error'] != '4') {
			$nombreFile = gmdate('Y-m-d', time() + 7200) . "" . $this::camelCase($_FILES['imgMain']['name']);
			$tipoFile = $_FILES['imgMain']['type'];
			switch ($tipoFile) {
			case 'image/jpg':
				$tipoFile = '.jpg';
				break;
			case 'image/jpeg':
				$tipoFile = '.jpeg';
				break;
			case 'image/png':
				$tipoFile = '.png';
				break;
			case 'image/gif':
				$tipoFile = '.gif';
				break;
			default:
				echo "<h1> querido admin, foto de formato incorrecto. :) </h1>";
				header("Refresh: 5; URL=admin/adminDibujo/0");
				break;

			}
		}
		$nombreFull = '';
		$tipoFull = '';

		//Si existe FULL, la guardo.
		if (isset($_FILES['imgHas_full'])) {

			if ($_FILES['imgMain']['error'] != '4') {
				$nombreFull = gmdate('Y-m-d', time() + 7200) . "" . $this::camelCase($_FILES['imgHas_full']['name'] . "_FULL");
				$tipoFull = $_FILES['imgHas_full']['type'];
				switch ($tipoFull) {
				case 'image/jpg':
					$tipoFull = '.jpg';
					break;
				case 'image/jpeg':
					$tipoFull = '.jpeg';
					break;
				case 'image/png':
					$tipoFull = '.png';
					break;
				case 'image/gif':
					$tipoFull = '.gif';
					break;
				default:
					echo "<h1> querido admin, foto de formato incorrecto. :) </h1>";
					header("Refresh: 5; URL=admin/adminDibujo/0");
					break;

				}
			}

		} else {
			unset($nombreFull);
			unset($tipoFull);
		}

		// no meto ni ID ni ID_PADRE
		$values = array(
			"id" => $_POST['id'] ? $_POST['id'] : null,
			"date" => 'current_date',
			"id_texto" => $_POST['id_texto'] ? $_POST['id_texto'] : null,
			"is_texto" => $_POST['is_texto'],
			"id_categoria" => $_POST['id_categorias'] ? $_POST['id_categorias'] : null,
			"img" => isset($_FILES['imgMain']) ? $nombreFile . $tipoFile : '',
			"has_full" => isset($_FILES['imgHas_full']['name']) ? $nombreFull . $tipoFull : '',
		);
		if ($values['img'] == '' || is_null($values['img'])) {
			unset($values['img']);
		}
		if ($values['has_full'] == '' || is_null($values['has_full'])) {
			unset($values['has_full']);
		}

		//creación del objeto.
		$objDibujo = new DibujoController(false);
		$inserted = $objDibujo->updateDraw($values, $_POST['id']);

		if ($inserted) {

			$tmp_name = $_FILES['imgMain']['tmp_name'];
			$movido1 = move_uploaded_file($tmp_name, "res/images/" . $values['img']);
			if (isset($_FILES['imgHas_full'])) {
				$tmp_name = $_FILES['imgHas_full']['tmp_name'];
				$movido2 = move_uploaded_file($tmp_name, "res/images/" . $values['has_full']);
			}
		};
		header("Location: " . base_url . "admin/adminDibujos/0");
	}

	public function addBlog() {
		$values = array(
			'date' => 'current_date',
			'titulo' => $_POST['titulo'],
			'id_categoria' => $_POST['id_categoria'],
			'texto' => $_POST['texto'],
			'is_dibujo' => $_POST['is_dibujo'],
			'id_dibujo' => $_POST['id_dibujo'],

		);

		$objBlog = new BlogController(false);
		$objBlog->createBlog($values);

		header("Location: " . base_url . "admin/adminBlogs/0");
	}

	public function deleteDibujo() {

		if (isset($_POST['borrarBlog']) && $_POST['borrarBlog'] != '') {
			$objBlog = new BlogController(false);
			$objBlog->borrarBlog($_POST['id_blog']);
		}
	}

	public function loadAjax() {
		$id = $_REQUEST['page'];
		$objDibujo = new DibujoController();
		$retorno = $objDibujo->getOne($id);
		echo json_encode($retorno);exit;
	}
	//camelCase
	public static function camelCase($str, array $noStrip = []) {
		// non-alpha and non-numeric characters become spaces
		$str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
		$str = trim($str);
		// uppercase the first character of each word
		$str = ucwords($str);
		$str = str_replace(" ", "", $str);
		$str = lcfirst($str);

		return $str;
	}

}
