<?php 
require_once 'autoload.php';
$config = array(
	'db_host'		=> 'localhost',
	'db_name'		=> 'unittest',
	'db_username'	=> 'root',
	'db_password'	=> ''
);

class testUser extends PHPUnit_Framework_TestCase {
	
	public function testLogout() {
		
		$name = 'login';
		
		$user = new User();
		//Try run logout method when login session is not set
		$this->assertNull($user->logout());
				
		//Set login session		
		Session::set('login', 'testMessage');
		//check if flash session loggedOutSucces has been set
		
		$this->assertTrue(Session::exists($name));

		
	}
}

class testUser_ReadOnly extends PHPUnit_Framework_TestCase {
	public $db;
	
	public static function setUpBeforeClass() {
		global $config;
        $command='c:\xampp\mysql\bin\mysql.exe -h ' .$config['db_host'] .' -u ' .$config['db_username'] .' ' .$config['db_name'] .' < unittest.sql ' ;
		$output=array();
		exec($command,$output,$worked);	
		
	}
	
	protected function setUp() {
		$this->db = new Db();
    }
	
	
}


class testUser_Write extends PHPUnit_Framework_TestCase {
	public $db;
	
	protected function setUp() {
		global $config;
        $command='c:\xampp\mysql\bin\mysql.exe -h ' .$config['db_host'] .' -u ' .$config['db_username'] .' ' .$config['db_name'] .' < unittest.sql ' ;
		$output=array();
		exec($command,$output,$worked);
		
		$this->db = new Db();
    }
}


?>