<?php
	//1+2+3+4 =?,using recursion
	$add_limit = 5;
	$sum = 0;

	function number_add( $passing_value ){
		global $add_limit,$sum;

		if ($passing_value <= $add_limit) {
			
			echo $passing_value;
			if ($passing_value <= ($add_limit-1)) {
				echo "+";
			}

			$sum = ($sum + $passing_value);
			$passing_value++;
			number_add($passing_value);	//recursion,call the function every time inside if condition


		}else{

			echo " = ". $sum;

		}
		
	}//end of function

	
	number_add( 1 ); //initially passing value

?>