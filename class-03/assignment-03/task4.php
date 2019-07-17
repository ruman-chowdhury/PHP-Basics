<?php
	
	function checking_number($x){
		
		if ($x > 0) {
			echo "X is positive.";

		}elseif ($x == 0) {
			echo "X is zero.";

		}else{
			echo "X is negative.";

		}

	}

	checking_number(2);

?>
