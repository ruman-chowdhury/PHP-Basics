<?php
	
	class MyName{
		public $name;

		
		public function __construct($newName){
			$this->name = $newName;
			
		}

		
		public function showName(){
			return $this->name;
		
		}


	}	

?>