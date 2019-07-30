<?php

	if (isset($_POST['submit'])){
		//receive input text
		$word = $_POST['word'];

		//taking text into array
		$arr_word = array("php","java","rubi","python","kotlin","javascript","java","php");
		$arr_length = count($arr_word);

		$k = 0;

		if ( !empty($_POST['word']) ) {
			
			for ($i=0; $i<$arr_length; $i++) { 
			
				if ($word == $arr_word[$i]) {	
					//echo "<span style='color:green'> Word Matched! </span><br>";
					echo $arr_word[$i]."<br>";
					$k++;
					 //break;
				}


			}//for loop

			//checking word is matching or not
			echo "<br>";
			if ($k > 0){
				echo "<span style='color:green'>$k Matched word</span><br>";

			}else{
				echo "<span style='color:red'> Word not Matched! </span>";

			}



		}else{
			
			echo "<span style='color:red'> Empty Field! </span>";

		}
		


	}//outside if




?>