<?php

class UsuarioModel extends Modelo {
	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'usuarios';
	}

}