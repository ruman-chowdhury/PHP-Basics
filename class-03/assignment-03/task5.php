<?php
	
	$str_name1 = "Ruman Chowdhury Hridoy";
	$str_name2 = "Umme Habiba Snigdha";
	$str_name3 = "Raiyan Chowdhury";
	
	$name1_length = strlen($str_name1);
	$name2_length = strlen($str_name2);
	$name3_length = strlen($str_name3);


	$shortest_length = finding_length( $name1_length, $name2_length, $name3_length );
	

	//finding shortest Name
	if( $shortest_length == $name1_length ){
		echo "Shortest Name: ". $str_name1;

	}
	if( $shortest_length == $name2_length ){
		echo "Shortest Name: ". $str_name2;

	}
	if( $shortest_length == $name3_length ){
		echo "Shortest Name: ". $str_name3;
	
	}


	echo "<br>";
	echo "Name Length: " .$shortest_length. "<br><br>";
	

	//checking name length
	if( $shortest_length % 2 == 0 ){
		echo "You are General.";

	}
	if( $shortest_length % 2 == 1){
		echo "You are different!";

	}



	//function, finding shortest number
	function finding_length( $length1,$length2,$length3 ){

		if(($length1 < $length2) && ($length1 < $length3) ){
			return $length1;

		}elseif (($length2 < $length1) && ($length2 < $length3)) {
			return $length2;

		}else{
			return $length3;

		}

	}//end of function


?>