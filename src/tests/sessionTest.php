<?php 
require_once 'autoload.php';
require_once "PHPUnit/Autoload.php";


class testSession extends PHPUnit_Framework_TestCase {

	public function testDbHandler() {
		$db = new DB();
		$this->assertObjectHasAttribute('_instance', $db);
	}

	public function testSetSession() {
		$name = 'test';
		$value = 'test';
		
		$result = Session::set($name, $value);
		$this->assertEquals(Session::get('test'), $result);
	}
	
	public function testFlashMessage() {
		$name = 'test';
		$value= 'testmessage';
		$result = Session::set($name, $value);
		
		$this->assertEquals(Session::flash($name), $value);
	}
	
	public function testSessionDelete() {
		$name = 'test';
		$value = 'test';
		
		Session::set($name, $value);
		//Check if session has been set
		$this->assertEquals(Session::get($name), 'test');
		
		//Check if session has been deleted
		$this->assertNull(Session::delete($name));
	}
}






?>