<?php
	//multiplication table using nested loop
	
	for ($row=1; $row<=5; $row++){ 
		echo "Table $row: <br>";
		for ($col=1; $col<=10; $col++) { 
			
			$mul = ($row * $col) ;
			echo "$row x $col = ". $mul ."<br>";
		}

		echo "<br><br>";
	}

?>