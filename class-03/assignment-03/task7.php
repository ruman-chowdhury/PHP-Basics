<?php
	//loop for even numbers
	echo "Even Numbers: <br>";
	for($i=1; $i<=200; $i++){
		
		if ($i % 2 == 0) {
			echo  $i .", ";
		}

	}//1st loop

	echo "<br><br>";
	
	//loop for odd numbers
	echo "Odd Numbers: <br>";
	for($j=1; $j<=200; $j++){
		
		if ($j % 2 == 1) {
			echo $j .", ";
		}

	}//2nd loop

	


?>