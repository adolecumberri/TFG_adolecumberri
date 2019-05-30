
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
	$controller = 'main';
}

//Si hay controlador, cargo el metodo
if (isset($_REQUEST['c'])) {
	$getMethod = $_REQUEST['m'];
}

if (!file_exists($pathModel)) {
	exit('No se ha podido cargar el Modelo. <br/>');
} else {
	include $pathModel;
}

if (!file_exists($pathController)) {
	exit('No se ha podido cargar el controlador.<br/>');
} else {
	include $pathController;
}

//crear Obj controlador
$obj = new $controller;
if (!method_exists($obj, $getMethod)) {
	exit("No existe el método $getMethod<br />");
} else {
	$result = $obj->$getMethod();
}
//CargarPlantilla  Principal
if ($obj->getView()) {
	include 'app/views/html.tpl.php';
}

?>