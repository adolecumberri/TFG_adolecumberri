<?php

include_once 'app/models/Modelo.php';
class UsuarioModel extends Modelo {
	public $table;

	public function __construct() {
		parent::__construct();
		$this->table = 'usuarios';
	}
	public function login($nick, $password) {
		$result = false;

		//Comprobar si existe el usuario.
		$query = "SELEC id, password from usuarios WHERE nick = '$nick'";
		$login = $this->database->rawQuery($query, 'usuarios');

		if ($login && $login->num_rows() == 1) {
			$usuario = $login[0];
			$result = $usuario;
		}

		return $result;
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