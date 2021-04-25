<?php

if (isset($_POST['sl_no']) && isset($_POST['com_name']) && isset($_POST['com_password']) && isset($_POST['com_pincode'])  && isset($_POST['com_address'])  && isset($_POST['com_district'])&& isset($_POST['com_ph'])) {
	
   
		// include Database connection file 
		include("../../db.php");

		// get values 
		
        $com_name = $_POST['com_name'];
        $com_address = $_POST['com_address'];
        $com_password = $_POST['com_password'];
        $com_ph = $_POST['com_ph'];
        $com_pincode = $_POST['com_pincode'];
        $com_district = $_POST['com_district'];
        $sl_no = $_POST['sl_no'];
 
        
         $check="select * from company where  phno = $com_ph  and sl_no != $sl_no" ;
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==0){  
         

		$update_query = "update company set companyname='$com_name',address='$com_address',password='$com_password',district='$com_district',pincode=$com_pincode,phno=$com_ph where sl_no=$sl_no ";
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



