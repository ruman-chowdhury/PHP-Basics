<?php
	class Person{
		public $person_name;
		public $person_age;
		public $person_dept;

		function personDetails($name,$age,$dept){
			$this->person_name = $name;
			$this->person_age = $age;
			$this->person_dept = $dept;

			//multiple value can be passed through array
			return array($this->person_name,$this->person_age,$this->person_dept);
		}


	}
?>