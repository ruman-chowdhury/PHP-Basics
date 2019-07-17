<?php
	
	function finding_number( $x, $y, $z ){
		
		if(($x > $y) && ($x > $z)){
			echo "X is the maximum number.";

		}elseif (($y > $x) && ($y > $z)) {
			echo "Y is the maximum number.";

		}else{
			echo "Z is the maximum number";

		}

	}//end function

	finding_number(20,30,10);


?>