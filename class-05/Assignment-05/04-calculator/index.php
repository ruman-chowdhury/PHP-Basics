<!-- html form must be outside of php -->	
	<form action="" method="POST">
		<table>	

			<tr>
				<td><strong>First Number:</strong> </td>
				<td> <input type="number" name="num1" /> </td>
			</tr>

			<tr>
				<td><strong>Second Number:</strong></td>
				<td> <input type="number" name="num2" /> </td>
			</tr>

			<tr>
				<td></td>
				<td> <input type="submit" name="calculation" value="Calculate" /> </td>
			</tr>

		</table>
			
	</form>


<?php 
	include 'basicfunction.php';
		
	//get the number after submition
	if (isset($_POST['calculation'])) {
		
		$number1 = $_POST['num1'];
		$number2 = $_POST['num2'];


		if ( !empty($number1) or !empty($number2) ) {
			
			$math_obj = new Maths;

			$math_obj->sumation($number1,$number2);
			$math_obj->subtraction($number1,$number2);
			$math_obj->multiplication($number1,$number2);
			$math_obj->division($number1,$number2);


		}else{
			echo "<span style='color:red'> Field must not be empty! </span>";
			
		}
	
	}






?>