<?php
   
   if(isset($_POST['submit'])){
      //get file from input
      $file = $_FILES['image'];

      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_size = $file['size'];
      $file_type = $file['type'];
     // $file_error = $file['error'];

      $extensions = array("jpg","jpeg","png","gif");
      $file_str_separate = explode(".", $file_name); //separate filename,extension from array
      $file_ext = strtolower(end($file_str_separate));   //separate only ext,convert lower

      $errors= array();

      if (!in_array($file_ext, $extensions)){
         $errors[]="extension not allowed, choose jpg/jpeg/png/gif file.";
      }
      if($file_size > 2097152){
         $errors[]="File size must be less than 2 MB.";
      }

      if(!empty($errors) == true){
         print_r($errors);

      }else{
         
         move_uploaded_file($file_tmp, "image_folder/".$file_name);
         echo "Successfully uploaded.";

      }


     
      //to show photos
      echo "<br>";
      echo "<img width='200px' src='image_folder/".$file_name." '>";

      //call the function to see image details
     echo "<br><br><strong> Image details: </strong>";
     displayDetails($file);

   }//outer if,submit

   
   //functions to display uploaded files details
   function displayDetails($file_array)
   {
      echo "<pre>";
      print_r($file_array);
      echo "</pre>";
   }

?>