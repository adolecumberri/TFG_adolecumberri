
 <?php

//establece contenido enviando un http
header('Content-type: text/html; charset=utf-8');
require_once 'autoload.php';
require_once 'app/config/database.php';
require_once 'app/config/parameters.php';
//parse del AJAX....
if (isset($_REQUEST['ajax'])) {
	require_once "app/controllers/AdminController.php";
	$objController = new AdminController();
	$getMethod = $_REQUEST['m'];
	$result = $objController->$getMethod();
	exit();
}

if (isset($_REQUEST['c'])) {
	if ($_REQUEST['c'] == 'admin') {
		require_once "app/controllers/AdminController.php";
		$objController = new AdminController();
		require_once 'app/layout/header.php';
		$getMethod = $_REQUEST['m'];
		if (!method_exists($objController, $getMethod)) {
			header("Location: " . base_url . "admin/index/0");

		} else {
			$result = $objController->$getMethod();
		}

		if (isset($_COOKIE['exist'])) {
			if (file_exists("app/views/$getMethod.tpl.php")) {
				require_once "app/views/$getMethod.tpl.php";
			} else {
				require_once "app/views/panel.tpl.php";
			}

		} else {
			require_once "app/views/login.tpl.php";

		}
		require_once 'app/layout/footer.php';

		exit();
	}

	//cargo Controller y Model y sus paths
	//Sino, en el principal.
	$controller = $_REQUEST['c'] . 'Controller';
	$pathController = "app/controllers/$controller.php";
	$model = $_REQUEST['c'] . 'Model';
	$pathModel = "app/models/$model.php";

	//Si hay controlador, cargo el metodo
	if (isset($_REQUEST['m'])) {

		$getMethod = $_REQUEST['m'];
		$objController = new $controller();
		if (!method_exists($controller, $getMethod)) {
			print_r("ERROR 404 ?");
			http_response_code(404);
			require_once "app/controllers/errorController.php";
			$objController = new errorController();
			$result = $objController->grid();
			require_once 'app/layout/header.php';
			require_once 'app/views/error.tpl.php';
			require_once 'app/layout/footer.php';
			exit();
		} else {
			require_once 'app/layout/header.php';
			$result = $objController->$getMethod();
			if ($objController->getView()) {
				include_once 'app/views/' . $objController->getView();
			}
			if ($objController->getJs()) {
				include_once 'res/js/' . $objController->getView();
			}
			require_once 'app/layout/footer.php';
		}

	} else {
		// cuando no hay variables GET, creo un controlador HOME,
		// cargo la view HOME.TPL.PHP
		// y meto la view HTML.tpl.php para que se genere.
		include $pathController;
		$result = $objController->grid();
		require_once 'app/layout/header.php';
		include "app/views/" . $objController->getView();
		require_once 'app/layout/footer.php';
		exit();
	}

} else {

	require_once "app/controllers/HomeController.php";
	$objController = new HomeController();
	$result = $objController->grid();
	require_once 'app/layout/header.php';
	require_once 'app/views/home.tpl.php';
	require_once 'app/layout/footer.php';
	exit();
}

?>