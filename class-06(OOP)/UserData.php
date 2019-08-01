<?php
	class UserData{
		
		private $userName = "Ruman Chowdhury";
		public $userAge = 25;
		
		public function __construct($name){
			$this->userName = $name;
			
		}

		public function getUserName(){
			return $this->userName;
		}


	}

?>