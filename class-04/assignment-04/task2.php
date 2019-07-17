<?php
	//1+2+3+4 = 5,sum using loop
	$n = 6;
	$sum = 0;
	
	for ($i=1; $i<=$n; $i++) { 
		
		echo "$i ";
		if ( $i<=($n-1) ){
			
			echo " + ";

		}

		$sum += $i;
		
	}

	echo " = ".$sum; //last value of i

?>