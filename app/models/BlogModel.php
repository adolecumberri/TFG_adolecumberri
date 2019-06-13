<?php
include_once 'app/models/Modelo.php';
class BlogModel extends Modelo {

	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'blogs';
	}

	public function getColNum() {

		$query = 'select count(id) as id from blogs ;';
		$val2 = $this::rawQuery($query);
		$retorno = intval($val2[0]->id);
		return $retorno;
	}

	public function getAll($page) {
		$query = 'SELECT blogs.id, blogs.date, blogs.titulo, blogs.texto, blogs.deleted, dibujos.img as dibujo, categorias.nombre as categoria FROM blogs left join categorias on blogs.id_categoria = categorias.id left join dibujos on blogs.id_dibujo = dibujos.id
			limit ' . ($page * 6) . ', 6;';

		$retorno = $this::rawQuery($query);

		// parse DATE:
		$retorno = $this::parseTime($retorno);

		return $retorno;
	}

	public function getOne($id) {
		$query = "SELECT blogs.*, categorias.nombre as nombre_categoria
				FROM blogs
				left join categorias
				on blogs.id_categoria = categorias.id
				WHERE blogs.id like $id ;";

		$retorno = $this::rawQuery($query);

		// parse DATE:
		$retorno = $this::parseTime($retorno);

		return $retorno[0];
	}

}
