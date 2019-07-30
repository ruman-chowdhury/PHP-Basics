<?php
	
	class Maths{
		public $sum;
		public $sub;
		public $mul;
		public $div;
		
		function sumation($a,$b){
			$this->sum = ($a+$b);
			echo "Sum: ". $this->sum ."<br>";
		}

		function subtraction($a,$b){
			$this->sub = ($a-$b);
			echo "Sub: ". $this->sub ."<br>";
		}

		function multiplication($a,$b){
			$this->mul = ($a*$b);
			echo "Mul: ". $this->mul ."<br>";
		}

		function division($a,$b){
			$this->div = ($a/$b);
			echo "Div: ". $this->div ."<br>";
		}

	}

?>