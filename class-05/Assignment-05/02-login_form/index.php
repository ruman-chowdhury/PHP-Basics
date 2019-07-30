	<!-------starting php---------->
<?php
    
    $username = $email = $website = $comment = $gender = "";
    $errusername = $erremail = $errwebsite = $errgender = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        //taking username by $_POST & Checking
        if(empty($_POST['username'])){
            
            $errusername = "<span style='color:red'>* Name is Required </span>";
        }
        else{
            
            $username = validate($_POST['username']);
        }
        
        
        //taking email by $_POST & Checking
        if(empty($_POST['email'])){
            
            $erremail = "<span style='color:red'>* Email is Required </span>";
        }
        elseif( !filter_var( $_POST['email'],FILTER_VALIDATE_EMAIL ) ){
            
            $erremail = "<span style='color:red'> Invalid Email ! </span>";
        }
        else{
            
            $email = validate($_POST['email']);
        }
        
        
        //taking password by $_POST & Checking
        if(empty($_POST['website'])){
            
            $errwebsite = "<span style='color:red'>* Website is Required </span>";
        }
        elseif(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
            
            $errwebsite = "<span style='color:red'> Invalid Website Format ! </span>";
        }
        else{
            
            $website = validate($_POST['website']);
        }
        
        //taking comment by $_POST & we don't need to show required in comment section
            $comment = validate($_POST['comment']);
        
        
        
        //taking gender by $_POST & Checking
        if(empty($_POST['gender'])){
            
            $errgender = "<span style='color:red'>* Gender is Required </span>";
        }
        else{
            
            $gender = validate($_POST['gender']);
        }
        
        

    }//Server,if

    //function for avoiding space,slash or other charecters
    function validate($data){
        
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
					
?>


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
                
				<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    
                     <table>

                            <tr>
                                <td>Name:</td>
                                <td> <input type="text" name="username"> <?php echo $errusername; ?> </td>
                            </tr>

                            <tr>
                                <td>Email:</td>
                                <td> <input type="email" name="email"> <?php echo $erremail; ?> </td>
                            </tr>

                            <tr>
                                <td>Website:</td>
                                <td> <input type="text" name="website"> <?php echo $errwebsite; ?></td>
                            </tr>

                            <tr>
                                <td>Comment</td>
                                <td> <textarea name="comment" rows="4" cols="25"></textarea> </td>
                            </tr>

                            <tr>
                                <td>Gender:</td>
                                <td> 
                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    
                                    <?php echo $errgender; ?>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td> <input type="submit" name="submit" value="submit"> </td>
                            </tr>

                        </table>
                    
				</form><!--end of form-->

								
			</section>
		</div>
		
	</body>
</html>

<?php
            //print the submitted values
        echo "Name: " .$username. "<br>";
        echo "Email: " .$email. "<br>";
        echo "Website: " .$website. "<br>";
        echo "Comment: " .$comment. "<br>";
        echo "Gender: " .$gender;
        


?>