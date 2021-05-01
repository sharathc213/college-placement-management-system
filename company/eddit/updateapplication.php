

             <?php

if (isset($_POST['userid']) && isset($_POST['option']) && isset($_POST['jusl'])&& isset($_POST['jobcode'])) {
	
   
		// include Database connection file 
		include("../../db.php");

		// get values 
		
        $userid= $_POST['userid'];
        $option = $_POST['option'];
        $test = $_POST['test'];
        $sl_no = $_POST['jusl'];
        $jobcode = $_POST['jobcode'];
    

        if($test!="not"){
            $check="select * from examuser where  userid = $userid  and examid = $test  and jobcode = '$jobcode'";
            $result_check=mysqli_query($con,$check);
        if(mysqli_num_rows( $result_check)==0){  

            $update_query2 = "insert into examuser(userid,examid,jobcode)values($userid,$test,'$jobcode')";
            if (!$result2 = mysqli_query($con,$update_query2)) {
                exit(mysqli_error());
               echo "some thing is wrong";
            } 
        }  else{
            echo 110;
        }
          
    }
     

		$update_query = "update jobuser set verify = $option where sl_no=$sl_no ";
		if (!$result = mysqli_query($con,$update_query)) {
	        exit(mysqli_error());
           echo "some thing is wrong";
	    }else{
        
        echo 111;
        }
        
	
	}
?>



