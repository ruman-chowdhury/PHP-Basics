<?php 
	
	function add_number($x,$y){
		$sum = $x+$y;
		echo $sum. "<br>";
	}
	
	function sub_number($x,$y){
		$sub = $x-$y;
		echo $sub. "<br>";
	}
	
	function mul_number($x,$y){
		$mul = $x*$y;
		echo $mul. "<br>";
	}
	
	function div_number($x,$y){
		$div = $x/$y;
		echo $div. "<br>";
	}
	
	add_number(5,7);
	sub_number(20,5);
	mul_number(5,6);
	div_number(21,3);
	
?>