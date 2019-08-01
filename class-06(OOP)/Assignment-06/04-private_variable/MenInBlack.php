<?php
	
	class Security{
		
		private $agentName;
		private $agentKey;
		private $agentDept;

		
		//=======Name==============
		public function setName($name){
			$this->agentName = $name;
		
		}

		public function getName(){
			return $this->agentName;
		}

		
		//========key===========
		public function setKey($key){
			$this->agentKey = $key;
		
		}

		public function getKey(){
			return $this->agentKey;
		}


		//======Department============
		public function setDept($dept){
			$this->agentDept = $dept;
		
		}

		public function getDept(){
			return $this->agentDept;
		}



	}//security class

?>