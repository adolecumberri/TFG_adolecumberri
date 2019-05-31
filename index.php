
<!-- CONTROLADOR FRONTAL -->

 <?php
//establece contenido enviando un http
header('Content-type: text/html; charset=utf-8');
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
if (isset($_REQUEST['c'])) {
	$getMethod = $_REQUEST['m'];
}else{

	print_r("entro aqui <br/>");
	include $pathController;
	$objController = new  $controller();
	$objController->index();
	include 'app/views/home.tpl.php';
	exit();
}


if (!file_exists($pathModel)) {
	//Si no existe el Path Model, seguramente es por que estoy en HomeController
} else {
	include $pathModel;
}

if (!file_exists($pathController)) {
	exit('No se ha podido cargar el controlador.<br/>');
} else {
	include $pathController;
}

//crear Obj controlador
$objController = new $controller();
if (!method_exists($objController, $getMethod)) {
	exit("No existe el método $getMethod<br />");
} else {
	$result = $objController->$getMethod();
}
//CargarPlantilla  Principal
if ($objController->getView()) {
	include 'app/views/html.tpl.php';
}

?>