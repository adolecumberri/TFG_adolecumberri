<?php

include 'app/models/Modelo.php';
class BlogModel extends Modelo {

	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'blogs';
	}

	public function getAll() {
		$query = "SELECT blogs.id, blogs.date, blogs.titulo, blogs.texto, blogs.deleted, dibujos.img as dibujo, categorias.nombre as categoria FROM $this->table inner join categorias on blogs.id_categoria = categorias.id left join dibujos on blogs.id_dibujo = dibujos.id;";

		$retorno = $this::rawQuery($query, $this->table);

		// parse DATE:
		foreach ($retorno as $row) {

			$parse = DateTime::createFromFormat('Y-m-d', $row->date);
			$parse->Format('d,F,Y');
			$row->date = $parse->Format('d F Y');

		}

		return $retorno;
	}

}
