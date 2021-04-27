

             <?php

if (isset($_POST['sl_no']) && isset($_POST['job_name']) && isset($_POST['job_details']) && isset($_POST['job_qua']) ) {
	
   
		// include Database connection file 
		include("../../db.php");

		// get values 
		
        $sl_no= $_POST['sl_no'];
        $job_name = $_POST['job_name'];
        $job_details = $_POST['job_details'];
        $job_qua = $_POST['job_qua'];
      
        
         $check="select * from job where  jobname = '$job_name'  and jobdetails = '$job_details' and sl_no!=$sl_no" ;
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==0){  
         

		$update_query = "update job set jobname = '$job_name',jobdetails = '$job_details',qualification = '$job_qua',status=3 where sl_no=$sl_no ";
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



