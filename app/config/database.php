<?php

class Database {
	public $baseName = 'tfg_adolecumberri';
	public $db;
	public static function conect() {
		//datos de la db.
		$db = new mysqli('localhost',
			'root',
			'',
			'tfg_adolecumberri');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
/*
public function rawQuery($query) {
$db->query($query);
var_dump($db->query($query));
if ($queryResult) {
$result = array();
while ($row = mysqli_fetch_array($queryResult)) {
$result[] = $row;
}
}
return $result ? $result : false;
}*/
}