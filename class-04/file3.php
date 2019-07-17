<?php
	
	for ($i=3; $i >= 1; $i--) { 
		for ($j=1; $j <= 10 ; $j++) { 
			$mul = ($i * $j);
			echo "$i * $j = ". $mul ."<br>";
		}

		echo "<br><br>";
	}
?>