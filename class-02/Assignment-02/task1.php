<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>PHP Coding</title>
		<style>
			.wrapping{
				width:900px;
				min-height:550px;
				margin:0 auto;
				background:#ddd;
			}
			.heading{
				background:#444;
				color:#fff;
				text-align:center;
				padding:5px;
			}
			
			.mainContent{
				padding:20px;
			}
		</style>
	</head>
	
	<body>
		
		<!--main div-->
		<div class="wrapping">
			
			<div class="heading">
				<h1>PHP Output</h1>
			</div>
			<!--mainSection-->
			<section class="mainContent">
				
				<!-------starting php---------->
				<?php
					$first_name = "Ruman";
					$last_name = "Chowdhury";
					
					//first way
					echo $first_name. " " .$last_name /*concatenation two variables*/;
					echo "<br>";
					
					//second way
					$first_name .= " Chowdhury Hridoy" /*$first_name=first_name. " chowdhury Hridoy"*/;
					echo $first_name;
				?>
				
			</section>
		</div>
		
	</body>
</html>