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
				
				<!-------php in html---------->
				<h1>
					<?php
						$text = "header";
						echo "This is " .$text. " in html <br>";
					?>
				</h1>
				<p> <?php echo "This is paragraph is html."?></p>
				
			</section>
		</div>
		
	</body>
</html>

