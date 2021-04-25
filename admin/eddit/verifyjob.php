<?php

if (isset($_POST['sl_no']) && isset($_POST['value'])) {
	
   
		// include Database connection file 
		include("../../db.php");

		// get values 
		
   
        $sl_no = $_POST['sl_no'];
        $value = $_POST['value'];
 

         

		$update_query = "update job set status=$value where sl_no=$sl_no ";
		if (!$result = mysqli_query($con,$update_query)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
        }
       
	
	}
?>



