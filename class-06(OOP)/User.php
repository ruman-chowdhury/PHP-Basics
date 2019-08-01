<?php
	class User{
		
		private $userName = "Ruman Chowdhury"; //to access private property,it should be pass through public method
		public $userAge = 25;
		


		public function getUserName(){
			return $this->userName;
		}

		public function setUsername($newUserName){
			$this->userName = $newUserName;
			return $this->userName;

		}
	}

?>