<?php  

class Site {
	private $_instance;
	
	public function __construct() {
		$this->_instance = Db::getInstance();
	}
	
	public function checkExistance($siteNumber) {
		$result = Db::getInstance()->executeQuery('SELECT * FROM site WHERE site_number = ?', array($siteNumber));
		return $result->count();
	}
	
	public function getSiteList() {
		$resultSet = DB::getInstance()->executeQuery('SELECT * FROM site ORDER BY place ASC');
	
		$x = 1;
		
		foreach($resultSet->results() as $result){
			$str = "<tr class='clickable-row' data-url='site.php?nr=". $result->site_number ."'>";
			$str .= "<td>" . $x . "</td>";
			$str .= "<td>" . $result->site_number . "</td>";
			$str .= "<td>" . $result->place . "</td>";		
			$str .= "<td>" . $result->delivery_date . "</td>";
			$str .= "<td>" . $result->site_status . "</td>";
			$str .= "<td>" . $result->contractors_contractor_id . "</td>";
			$str .= "<td>" . $result->site_engineer . "</td>";
			$str .= "</tr>";
			$x++;
			echo $str;
		}
	}
	
	public function getSiteInfo($siteNumber) {
		$resultSet = $this->_instance->executeQuery('SELECT * FROM site WHERE site_number = ?', array($siteNumber));
		return $resultSet;
	}
	

}





?>