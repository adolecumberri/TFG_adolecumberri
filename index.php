
<!-- CONTROLADOR FRONTAL -->

 <?php
//establece contenido enviando un http
header('Content-type: text/html; charset=utf-8');
require_once 'app/config/database.php';
require_once 'autoload.php';
//cargo Controller y Model y sus paths
//Sino, en el principal.
if (isset($_REQUEST['c'])) {
	$controller = $_REQUEST['c'] . 'Controller';
	$pathController = "app/controllers/$controller.php";
	$model = $_REQUEST['c'] . 'Model';
	$pathModel = "app/models/$model.php";

} else {
	$controller = 'HomeController';
	$pathController = "app/controllers/HomeController.php";
}

//Si hay controlador, cargo el metodo
if (isset($_REQUEST['c']) && isset($_REQUEST['m'])) {

	$getMethod = $_REQUEST['m'];

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

if (!file_exists($pathModel)) {
	//Si no existe el Path Model, seguramente es por que estoy en HomeController
} else {
	include $pathModel;
}

//crear Obj controlador
$objController = new $controller();
require_once 'app/layout/header.php';
if (!method_exists($objController, $getMethod)) {
	$result = $objController->grid();
} else {
	$result = $objController->$getMethod();
}

//CargarPlantilla  Principal
if ($objController->getView()) {
	include_once 'app/views/' . $objController->getView();
}
if ($objController->getJs()) {
	include_once 'res/js/' . $objController->getView();
}
require_once 'app/layout/footer.php';
?>