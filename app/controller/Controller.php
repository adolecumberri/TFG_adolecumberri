<?php

class Controller {

	protected $view = '';
	protected $js = '';

	public function __construct() {
		//Tal vez hacer algo
	}

	public function getView() {
		return $this->view;
	}

	public function setView($view) {
		$this->view = $view;
	}

	public function getJs() {
		return $this->js;
	}

	public function setJs($js) {
		$this->js = $js;
	}

}