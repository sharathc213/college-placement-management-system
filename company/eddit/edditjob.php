

               
<?php
	// include Database connection file 
	include("../../db.php");
if( isset($_POST['sl_no']) && isset($_POST['com_code'])){
    
    $sl_no=$_POST['sl_no'];
    $comcode=$_POST['com_code'];


                            
            $get_job = "select * from job where sl_no='$sl_no'";
            $run_job = mysqli_query($con,$get_job);
            $row_job = mysqli_fetch_array($run_job);

            $jobname = $row_job['jobname'];
            $job_code = $row_job['jobcode'];
            $jobdetails = $row_job['jobdetails'];
            $status = $row_job['status'];
            $qname = $row_job['qualification'];

            // $get_com = "select * from company where sl_no='$comcode'";
            // $run_com = mysqli_query($con,$get_com);
            // $row_com = mysqli_fetch_array($run_com);

            // $com_name = $row_com['companyname'];
            

    
    	$data = ' 

        <div class="row">
        <div class="col-lg-12">
     
         
            <mark><h3>General Information</h3></mark>
       
            <div class="form-group">
            <label >Job code</label>
              <input disabled value="'.$job_code.'" type="text" name="name" class="form-control" id="job_code" placeholder="Company Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validati" style="color:red"id="job_code_error"></div>
            </div>

            <div class="form-group">
            <label >Job Name</label>
              <input  value="'.$jobname.'" type="text" name="name" class="form-control" id="job_name" placeholder="Company Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validati" style="color:red"id="job_name_error"></div>
            </div>
            <div class="form-group">
            <label >Min Qualification</label>
            <select id="job_qua"  class="form-control" >
            <option selected value="' . $qname . '" >' . $qname . '</option>
            ';
                          
                     

$get_qua = "select * from qualification where qname!='$qname'";
$run_qua = mysqli_query($con, $get_qua);

while ($row_qua = mysqli_fetch_array($run_qua)) {

    $quname = $row_qua['qname'];



    $data .= '
<option value="' . $quname . '" >' . $quname . '</option>';

} 
$data .= '</select>
              <div class="validati" style="color:red"id="job_qul_error"></div>
            </div>
        
            <div class="form-group">
            <label >Job Details</label>
              <textarea class="form-control" id="job_details" name="Company Address" rows="3" data-rule="required" data-msg="Please write the complete address" placeholder="Address">'.$jobdetails.'</textarea>
              <div class="validat" style="color:red" id="job_details_error"></div>
            </div>';
           
         
                $data .= "      <div class='text-center'><button  onclick='updatejob($sl_no,2);' class='btn btn-primary btn-lg'>UPDATE</button> <br>";
              
                  $data .= '      
                 <br> <div class="text-center">  <button  onclick="viewjob('.$comcode.')" class="btn btn-primary btn-lg">Cancel</button></div>
              
      </div>
       ';
    
    	 echo $data;
    	}

   

?>

 