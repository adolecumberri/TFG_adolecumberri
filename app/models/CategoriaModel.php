 <?php

class CategoriaModel extends Modelo {

	public $table;
	public function __construct() {
		parent::__construct();
		$this->table = 'categorias';
	}

}
