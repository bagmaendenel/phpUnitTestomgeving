<?php 
require_once 'autoload.php';
require_once "PHPUnit/Autoload.php";


class testSite extends PHPUnit_Framework_TestCase {

	public function testDbHandler() {
		$db = new DB();
		$this->assertObjectHasAttribute('_instance', $db);
	}

	/*public function testCheckExistance() {
		$site = new Site();
		
		$siteNumber = '12345';
		
		$scenario1 = $site->CheckExistance($siteNumber);
		
		$this->assertEquals($sitenumber, 0);
		
	
	}*/





}






?>