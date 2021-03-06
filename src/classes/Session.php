<?php 

class Session {

	public static function set($name, $value) {
		if(empty($name) || empty($value)) {
			return false;
		} else {
			return $_SESSION[$name] = $value;
		}
	}

	public static function exists($name) {
		return (isset($_SESSION[$name])) ? true : false;
	}
	
	public static function get($name) {
		return $_SESSION[$name];
	}
	
	public static function delete($name) {
		if(self::exists($name)) {
			unset($_SESSION[$name]);
		}
	}
	
	public static function flash($name, $string = '') {
		if(self::exists($name)) {
			$session = self::get($name);
			self::delete($name);
			return $session;
		} else {
			self::set($name, $string);
		}
		return '';
	}





}



?>