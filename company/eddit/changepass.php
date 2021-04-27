<?php

if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['cupass']) && isset($_POST['cpass']) ) {
	
   
		// include Database connection file 
		include("../../db.php");

		// get values 
		
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $cupass = $_POST['cupass'];
      
        
         $check="select * from company where  email = '$username'  and password = '$cupass'" ;
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==1){  
         

		$update_query = "update company set password='$pass' where email='$username' ";
		if (!$result = mysqli_query($con,$update_query)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
        }
        }else {
            echo 110;
        }
	
	}
?>



