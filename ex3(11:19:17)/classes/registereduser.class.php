<?php
	
class RegisteredUser extends user {
	
	public function __construct($id,$level)  {
		parent::__construct($level);
		$this->user_type = '1';
		$this->user_id = $id;
	}
	
	public function __set($name,$value) {
		$this->$name = $value;
	}
	
	public function __get($name) {
		return $this->$name;
	}
	
	public function __destruct() {
		
	}
	
	
	
}
	
	
	
	
	
	
?>