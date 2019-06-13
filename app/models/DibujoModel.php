<?php
include_once 'app/models/Modelo.php';
class DibujoModel extends Modelo {

	public $table;

	public function __construct() {
		/*	$modelo = new Modelo();
		$this->database = $modelo->database;*/
		parent::__construct();
		$this->table = 'dibujos';
	}

	public function getColNum() {
		$query = 'select count(id) as id from dibujos ;';
		$val1 = $this::rawQuery($query);
		$retorno = intval($val1[0]->id);
		return $retorno;
	}

	public function getAll($page) {

		if ($page == '') {
			$page = 0;
		}

		$query = 'SELECT dibujos.*, categorias.nombre as categoria FROM dibujos left join categorias on dibujos.id_categoria = categorias.id limit ' . (intval($page * 6)) . ', 6;';

		$retorno = $this::rawQuery($query);

		$retorno = $this::parseTime($retorno);
		return $retorno;
	}
	public function getOne($id) {
		$query = "SELECT dibujos.*, categorias.nombre as nombre_categoria, blogs.texto
				FROM dibujos
				left join categorias
				on dibujos.id_categoria = categorias.id
				left join blogs
				on dibujos.id_texto = blogs.id
				WHERE dibujos.id like $id ;";

		$retorno = $this::rawQuery($query);
		$retorno = $this::parseTime($retorno);
		return $retorno[0];
	}

}