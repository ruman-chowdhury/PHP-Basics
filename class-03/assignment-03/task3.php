<?php
	function checking_number( $x ){
		
		if($x % 2 == 0){
			echo "Even number";
		}
		if ($x % 2 == 1) {
			echo "Odd number.";
		}
	}

	checking_number(10);
?>