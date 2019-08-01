<?php
	include 'User.php';

	$userObj = new User();

	//set userName
	$userObj->setUserName("Hridoy Chowdhury");

	//print getUserName
	echo $userObj->getUserName();
	

	
?>