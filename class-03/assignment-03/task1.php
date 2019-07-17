<?php
	
	//===1) floatval() : return float value
	$var = "20.55Bangladesh";
	$var_result = floatval($var);
	echo "1) ". $var_result ."<br><br>";


	//===2) empty() : return boolean value.1=true,0=false
	$var1;
	echo "2) ". empty($var1) ."<br>";
	var_dump( empty($var1) );
	echo "<br><br>";


	//===3) is_array(): checking array or not
	$arr = array("php", "python", "java" );
	if ( is_array($arr) == 1 ){
	 	echo "3) Array <br><br>";
	 }
	if( is_array($arr) == 0 ){
		echo "3) Not Array.<br><br>";
	}


	//===4) is_null() : checking null or not
	$x = 10;
	echo "4) ";
	var_dump(is_null($x));
	echo "<br><br>";


	//===5) isset() : value is assaigned or not
	$y;
	echo "5) ";
	var_dump( isset($x) ); 
	echo "<br>";
	var_dump( isset($y) ); 
	echo "<br><br>";


	//===6) unset() : remove the assaigned value
	echo "6) ";
	$var_x = 10;
	unset($var_x);
	var_dump( isset($var_x)); 

?>