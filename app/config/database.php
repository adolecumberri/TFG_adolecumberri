<?php

class Database {
	public static function connect() {
		//datos de la db.
		$db = new msqli('localhost',
			'root',
			'',
			'tfg_adolecumberri');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}