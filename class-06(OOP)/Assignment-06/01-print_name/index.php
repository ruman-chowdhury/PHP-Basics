<?php
	include 'MyName.php';

	$nameObj = new MyName();

	$rcv_name = $nameObj->showName("Ruman Chowdhury");
	echo $rcv_name;
	
?>