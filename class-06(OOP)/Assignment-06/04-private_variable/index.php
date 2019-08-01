<?php
	include 'MenInBlack.php';
	include 'Bond.php';


	//==========class Security==============
	$security_obj = new Security();
	
	$security_obj->setName("Agent H");
	$security_obj->setKey("mib006");
	$security_obj->setDept("MenInBlack");

	$rcv_name = $security_obj->getName();
	$rcv_key = $security_obj->getKey();
	$rcv_dept = $security_obj->getDept();

	echo "Name: ". $rcv_name ."<br>";
	echo "Key: ". $rcv_key ."<br>";
	echo "Dept: ". $rcv_dept ."<br>";


	//=====class Bond25=========
	//print static var inside static method 
	Bond25::showInside();

	//print return values
	$rtn_values = Bond25::showOutside("London","0025dc");
	
	foreach ($rtn_values as $values) {
		echo $values ."<br>";

	}
	



?>