<?php 
require_once 'autoload.php';

$config = array(
	'db_host'		=> 'localhost',
	'db_name'		=> 'unittest',
	'db_username'	=> 'root',
	'db_password'	=> ''
);

class testDb_ReadOnly extends PHPUnit_Framework_TestCase {
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

    public function testPdoHandler() {
		$this->assertObjectHasAttribute('_pdo', $this->db);
    }
	
	public function testDbHandler() {
		$this->assertObjectHasAttribute('_instance', $this->db);
	}
	
	public function testGetInstance() {
		$this->assertEquals($this->db->getInstance(), $this->db);
	}
	
	public function testExecuteQuery_count() {
		$this->db->executeQuery('SELECT 1=1 as one');
		$this->assertEquals($this->db->count(), 1);
	}
	
	public function testExecuteQuery_results() {
		$this->db->executeQuery('SELECT 1=1 as one');
		$this->assertEquals($this->db->results()[0]->one, 1);
	}
	
	public function testExecuteQuery_tables() {
		$this->db->executeQuery('SELECT * FROM users WHERE users_id=1');
		$this->assertEquals($this->db->results()[0]->email, 'lars@larsrasmussen.nl');
	}
}

class testDb_Write extends PHPUnit_Framework_TestCase {
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