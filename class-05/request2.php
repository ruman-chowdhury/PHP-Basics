<?php
	
	if ( isset($_POST['submit']) ) {
		
		$temp = $_FILES['img']['tmp_name'];
		$img_name = "myphoto.jpg";
		move_uploaded_file($temp, "images/".$img_name);


		//to show photos
		echo "<img width='200px' src='images/".$img_name." ' >";
	}

?>