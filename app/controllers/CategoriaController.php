<?php
include_once 'app/models/CategoriaModel.php';
class CategoriaController extends Controller {

	public function __construct() {
		//nada por ahora
	}
	public function index() {
		echo "controlador Categoria construct";
	}
	public function crearCategorias($name) {
		$modelCat = new CategoriaModel();
		$query = " INSERT INTO categorias  VALUES (NULL, '$name', CURRENT_DATE); ";
		$modelCat->insertQuery($query);
		header("Location:" . base_url . "admin/adminCategorias/0");
		exit;

	}
	public function borrarCategoria($id) {
		$modelCat = new CategoriaModel();
		$query = " DELETE FROM `categorias` WHERE id = '" . $id . "';";
		$modelCat->insertQuery($query);
		header("Location:" . base_url . "admin/adminCategorias/0");
	}
	public function getAll() {
		$modelCat = new CategoriaModel();
		$query = " SELECT `id`, `nombre` FROM `categorias`;";
		$retorno = $modelCat->rawQuery($query);
		return $retorno;
	}

}
