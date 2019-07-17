<?php 
	
	$text ="Php Program";
	
	echo strlen($text);
	echo "<br>";
	
	echo str_word_count($text);
	echo "<br>";
	
	echo strrev($text);
	echo "<br>";
	
	echo md5($text);
	echo "<br>";
	
	echo str_replace("Php","Java",$text);
	echo "<br>";
	
	$text_array = array("Php","Python","Java","Rubi");
	echo implode(" ",$text_array); //return strings from array
	echo "<br>";
	
	$text_str = "Php Python Java Rubi";
	print_r (explode(" ",$text_str));
	
	
?>