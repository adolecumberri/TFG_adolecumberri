<?php

class Modelo {
	public $database;

	public function __construct() {
		$this->database = Database::conect();
	}

	public function rawQuery($query, $table) {

		$resultado = $this->database->query($query);
		$retorno = array();
		$i = 0;
		while ($obj = $resultado->fetch_object()) {
			$retorno += [$i => $obj];
			$i++;
		}
		return $retorno ? $retorno : false;
	}

	public function parseTime($values) {

		foreach ($values as $row) {

			$parse = DateTime::createFromFormat('Y-m-d', $row->date);
			$parse->Format('d,F,Y');
			$row->date = $parse->Format('d F Y');

		}
		return $values;
	}

}
