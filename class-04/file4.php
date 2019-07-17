<?php
	
	$var = 5;
	greet($var);

	function greet($n){

		if ($n > 0) {
			echo $n."<br>";
			$n--;
			greet($n);//recursion

		}

	}


?>