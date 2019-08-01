<?php
	include 'Security.php';

	$security_obj = new Security();
	
	$security_obj->setKey("007");
	$rcv_key = $security_obj->getKey();
	echo $rcv_key;
	
?>