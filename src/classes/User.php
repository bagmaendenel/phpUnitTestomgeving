<?php 

class User {
	private $_instance;
	
	public function __construct() {
		$this->_instance = Db::getInstance();
	}

	public function login($email, $password) {
		$result = $this->_instance->executeQuery('SELECT * FROM users WHERE email = ?', array($email));
		
		//Check if user exists
		if($this->_instance->results()) {
		
			//Get stored password
			$hashedPassword = $result->_results[0]->password;
			//compare given password again stored password
			$passwordCheck = password_verify($password, $hashedPassword);
			
			if($passwordCheck) {
				Session::set('login', $result->_results[0]->users_id);
				Redirect::to('index.php');
			} else {
				echo 'Username and/or password are invalid';
			}
		} else {
			echo 'Username and/or password are invalid';
		}
	}
	
	public function getName($sessionId) {
		$result = $this->_instance->executeQuery('SELECT * FROM users WHERE users_id = ?', array($sessionId));
		$name = ucfirst($result->_results[0]->first_name) . ' ' . ucfirst($result->_results[0]->last_name);
		return $name;
	}

	public function logout() {
		if(Session::exists('login')) {
			Session::delete('login');
			Session::set('loggedOutSucces', '<span>You have been logged out succesfully!</span>');
			Redirect::to('login.php');
		}
	}
	
	
	
	/*public function createUser() {
	
	
		//create a password
		$hashedPassword = password_hash("lars", PASSWORD_BCRYPT)."\n";
	}
	
	public function forgotPassword() {
	
	}

	*/

}




?>