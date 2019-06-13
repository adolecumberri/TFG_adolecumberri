<?php

include_once 'app/models/Modelo.php';
class AdminModel extends Modelo {
	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'usuarios';
	}
	public function login($nick, $password) {
		$result = false;

		//Comprobar si existe el usuario.
		$query = "SELECT id, nombre, password, rol from usuarios WHERE nick = '$nick'";
		$login = $this->rawQuery($query);

		if ($login && sizeof($login) == 1 && $login[0]->rol == 'admin') {
			$result = $login[0];
		}

		return $result == false ? false : $result;
	}
	public static function loadHeader() {
		$retorno = '
		<!-- pagina 1-->
			   	<li style="background-image: url(res/images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 col-md-pull-2 slider-text">
				   				<div class="slider-text-inner">

				   					<h1>Easter Egg Login</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	';
		return $retorno;
	}

}