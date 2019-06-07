<?php

include_once 'app/models/Modelo.php';
class BlogModel extends Modelo {

	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'blogs';
	}

	public function getAll() {
		$query = "SELECT blogs.id, blogs.date, blogs.titulo, blogs.texto, blogs.deleted, dibujos.img as dibujo, categorias.nombre as categoria FROM blogs left join categorias on blogs.id_categoria = categorias.id left join dibujos on blogs.id_dibujo = dibujos.id";

		$retorno = $this::rawQuery($query, $this->table);

		// parse DATE:
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

		$retorno = $this::rawQuery($query, $this->table);

		// parse DATE:
		$retorno = $this::parseTime($retorno);

		return $retorno;
	}

}
