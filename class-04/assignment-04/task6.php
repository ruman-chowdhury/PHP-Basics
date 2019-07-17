<?php
	//multiplication table of specific number
	$num1 = 22;
	$num2 = 40;


	if ($num1 == 22) {
		
		for ($row=$num1; $row==$num1; $row++) { 
			for ($col=1; $col<=10; $col++) { 
				
				$mul = ($row * $col);
				echo "$row x $col = ". $mul ."<br>";
		
			}//2nd loop
			echo "<br><br>";
		}//1st loop

	}elseif ($num2 == 40) {
		
		for ($row=$num2; $row==$num2; $row++) { 
			for ($col=1; $col<=10; $col++) { 
				
				$mul2 = ($row * $col);
				echo "$row x $col = ". $mul2 ."<br>";
		
			}//2nd loop
			
		}//1st loop

	}else{
		echo "Only 22 and 40 are availabe.";
		
	}
	


?>