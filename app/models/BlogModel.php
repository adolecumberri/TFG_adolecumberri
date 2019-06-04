<?php
class BlogModel extends Modelo {

	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'blogs';
	}

}
