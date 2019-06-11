<?php

class UsuarioController extends Controller {

	public function __construnc() {
		//constructor vacio, por ahora.

	}
	public function index() {
		echo "controlador Usuario construct";
	}
	public function login() {
		if (isset($_POST)) {
			//identificar
			//Consulta a la BBDD.
			$usuario = new UsuarioModel();
			$usuario->login($_POST['nick'], $_POST['password']);

			//Crear una sesion

		}

		header("Location: index.php");
	}

}
