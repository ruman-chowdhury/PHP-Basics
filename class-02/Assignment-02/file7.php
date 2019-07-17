<?php 
	//=======indexed array=============
	$names = array("Php","Python","Java","Rubi");
	$array_length = count($names);
	
	for($i=0; $i < $array_length; $i++){
		echo $names[$i];
		echo "<br>";
	}
	
	//===========associated array=================
	echo "<br><br>";
	
    $age = array("Max"=>"25","Tamim"=>"35","Sakib"=>"37");
    echo "Age of Max: " .$age['Max']. "<br>";
    echo "Age of Tamim: " .$age['Tamim']. "<br><br>";
					
    //using foreach loop
    foreach($age as $k => $v){
        echo "Key:" .$k. ",Value: " .$v. "<br>";
    
	}
	
	
	//=============multi dimensional array================
	echo "<br><br>";
	
	$num = array( 
		array(10,20,30),
		array(40,50,60),
		array(70,80,90),
		array(75,85,95)
	);

	echo $num[0][2];

	echo "<br>";
	echo "Multidimentional array through loop:";
	echo "<br>";

	//Multidimentional array through loop
	for($row=0; $row<4; $row++){
		for($col=0; $col<3; $col++){
			echo $num[$row][$col] ."<br>";
		}
	}

	
?>