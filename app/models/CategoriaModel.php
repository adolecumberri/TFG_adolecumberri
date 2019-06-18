 <?php

include_once 'app/models/Modelo.php';
class CategoriaModel extends Modelo {

	public $table;
	public function __construct() {
		parent::__construct();
		$this->table = 'categorias';
	}

}
