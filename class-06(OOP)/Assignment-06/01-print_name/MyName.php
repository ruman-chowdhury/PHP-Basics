<?php
	
	class MyName{
		public $name;

		public function showName($newName){

			$this->name = $newName;
			return $this->name;
		}
	}

?>