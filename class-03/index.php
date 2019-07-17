<?php 
	$text = array("Coders","Trust","Success","Story");
	echo implode(" ",$text);
	echo "<br>";

	$text_str = "Ruman,Chowdhury,Hridoy";
	$text_arr = (explode(",",$text_str)); //break into array
	print_r($text_arr);//print array
	echo "<br> <br>";
	
	echo implode(" ",$text_arr);//concate all array value

?>