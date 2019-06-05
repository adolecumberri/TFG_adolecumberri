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

	public function getAll() {
		$query = "SELECT * FROM $this->table ;";
		$retorno = $this::rawQuery($query, $this->table);
		return $retorno;
	}

}