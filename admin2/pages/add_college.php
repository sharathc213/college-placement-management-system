


<?php
	if(isset($_POST['college_code']) && isset($_POST['college_name']) && isset($_POST['college_email']))
	{
        
		// include Database connection file 
		include("../../db.php");

	
        $college_code = $_POST['college_code'];
        $college_name = $_POST['college_name'];
        $college_email = $_POST['college_email'];

        function randomPassword() {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, count($alphabet)-1);
                $pass[$i] = $alphabet[$n];
            }
            return $pass;
        }
        $password = randomPassword();
        
        

      

		$query = "INSERT INTO college(college_code, college_name,email,password) VALUES('$college_code','$college_name','$college_email','$password')";
		if (!$result = mysqli_query($con,$query)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
        }
            
    
	
	}
?>