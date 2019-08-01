<?php
	
	class Security{
		private $key;

		
		public function setKey($newKey){
			$this->key = $newKey;
		
		}

		public function getKey(){
			return $this->key;
		}
	}

?>