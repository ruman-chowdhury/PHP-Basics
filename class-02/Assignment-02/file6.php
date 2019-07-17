<?php 
	//checking data types
	$text = "Php program";
	$x = 10;
	$y = 10.5;
	$z = null;
	
	var_dump($text);
	echo "<br>";
	
	var_dump($x);
	echo "<br>";
	
	var_dump($y);
	echo "<br>";
	
	var_dump($z);
	echo "<br><br>";
	
	//php array
	$names = array("Php","Python","Java");
	var_dump($names);
	
	//php object
	echo "<br><br>";
	
	Class Laptop{
		function Laptop(){
			$this->brand = "Apple";
		}
	}
	
	$hr = new Laptop(); //creating object
	var_dump($hr);
	echo "<br>";
	var_dump($hr->brand);
?>