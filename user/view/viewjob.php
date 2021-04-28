               
<?php
	// include Database connection file 
	include("../../db.php");
if(isset($_POST['sl_no']) && isset($_POST['quary'])){
     $sl_no=$_POST['sl_no'];
    $get_job=$_POST['quary'];

                                $run_job = mysqli_query($con,$get_job);
          
                                while($row_job=mysqli_fetch_array($run_job)){
                                    
                                

                                    $address = $row_job['address'];
                                    $email = $row_job['email'];
                                  
                                    
                               
                                    
                                  

    

  
    echo $address;
  
    }
  }
?>






