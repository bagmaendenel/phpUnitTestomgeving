<?php 
require_once 'autoload.php';

class testUser extends \PHPUnit_Framework_TestCase {
	
	public function testPhpUnit(){
		$this->assertEquals('hello', 'hello');
	}

}

?>