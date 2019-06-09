<?php

include_once 'app/models/Modelo.php';
class HomeModel extends Modelo {

	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'Model';
	}

	public function getColNum() {
		$query = 'select count(id) as id from dibujos ;';
		$val1 = $this::rawQuery($query, $this->table);

		$query = 'select count(id) as id from blogs ;';
		$val2 = $this::rawQuery($query, $this->table);
		$retorno = (intval($val1[0]->id) + intval($val2[0]->id));
		return $retorno;
	}

	public function getPage($page) {
		$query = '
	(
	    SELECT dibujos.id,
	    dibujos.date,
	    titulo,
	    img,
	    categorias.nombre as categoria
	    FROM
	    dibujos left join categorias
	    on dibujos.id_categoria = categorias.id
	)
	UNION
	(
	 	SELECT blogs.id,
	    blogs.date,
	    titulo,
	    null as img,
	    categorias.nombre as categoria
	    FROM
		blogs left join categorias
	    on blogs.id_categoria = categorias.id
	)
	ORDER BY date
	limit ' . ($page * 6) . ', 6;
			';

		$retorno = $this::rawQuery($query, $this->table);
		$retorno = $this::parseTime($retorno);
		return $retorno;

	}

	public function getOne($id) {
		$query = "SELECT blogs.*, categorias.nombre as nombre_categoria
				FROM blogs
				left join categorias
				on blogs.id_categoria = categorias.id
				WHERE blogs.id like $id ;";

		$retorno = $this::rawQuery($query, $this->table);

		// parse DATE:
		$retorno = $this::parseTime($retorno);

		return $retorno[0];
	}

}

/*

(
SELECT id,
date,
titulo,
img
FROM
dibujos
)
UNION
(
SELECT id,
date,
titulo,
null as img
FROM
blogs
)
ORDER BY date;
 */