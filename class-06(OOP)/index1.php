<?php
	include 'Person.php';

	$Person_obj = new Person();
	
	$name ="Ruman Chowdhury";
	$age = 25;
	$dept = "hidden";

	$return_values = $Person_obj->personDetails($name,$age,$dept);

	foreach ($return_values as $values) {
		echo "$values <br>";
	}

	
?>