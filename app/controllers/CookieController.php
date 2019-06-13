<?php

class CookieController {
	public static function borrarCookie($key) {
		if (isset($_COOKIE[$key])) {
			unset($_COOKIE[$key]);
			setcookie($key, '', time() - 3600, '/'); // empty value and old timestamp
		}
	}

	public static function crearCookie($key, $value) {
		setcookie($key, $value, time() + (86400 * 30), "/");
	}
}