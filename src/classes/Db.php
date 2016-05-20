<?php 

class Db {
	public static $_instance = null;
	public	$_pdo = null,
			$_error = false,
			$_query,
			$_results,
			$_count;

	public function __construct() {
		global $config;
		
		if($this->_pdo === null) {
			try {
				$this->_pdo = new PDO('mysql:host=' . $config['db_host'] . '; dbname='. $config['db_name'], 
				$config['db_username'], 
				$config['db_password']);
				
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		} 
		return $this->_pdo;
	}
	
	public static function getInstance() {
		if(!isset(self::$_instance)) {
			self::$_instance = new DB();
		}
		return self::$_instance;
	}
	
	public function executeQuery($sql, $params = array()) {
		$this->_error = false;
		if($this->_query = $this->_pdo->prepare($sql)) {
			$x = 1;
			if(count($params)) {
				foreach($params as $param) {
					$this->_query->bindValue($x, $param);
					$x++;
				}
			}
		
			if($this->_query->execute()) {
				$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			} else {
				$this->_error = true;
			}
		}
		return $this;
	}
	
	public function results() {
		return $this->_results;
	}
	
	public function count() {
		return $this->_count;
	}
	

	
	
	

}















?>