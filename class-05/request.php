<?php
	
	if( isset($_POST['submit'])){
		$name = $_POST['username'];
		$pass = $_POST['password'];

		if (!empty($name) or !empty($pass) ) {
			echo "<span style='color:green'> Sucessfully logged in!</span> <br>";
			echo $name."<br>";
			echo $pass;

		}else{
			echo "<span style='color:red'> Field must not be empty! </span>";
		
		}

		

	}else{
		echo "<span style='color:red'> Field must not be empty! </span>";
		
	}




?>