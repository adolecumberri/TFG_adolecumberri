<?php

class HomeController extends Controller {

	public function __construct() {

	}

	public function index() {
		$this->setView('home.tpl.php');

	}

}
