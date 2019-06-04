<?php

function autocargar($className) {
	if (strpos($className, 'Model') !== false) {
		//include_once 'app/models/' . $className . '.php';
	} else if (strpos($className, 'Controller') !== false) {

		include 'app/controllers/' . $className . '.php';
	}

}

spl_autoload_register('autocargar');
