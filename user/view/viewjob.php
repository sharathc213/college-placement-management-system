             
<?php
	// include Database connection file 
	include("../../db.php");
if(isset($_POST['sl_no']) && isset($_POST['quary'])){
     $slno=$_POST['sl_no'];
    $get_job=$_POST['quary'];
    $i=0;
    $data ='
   
    <style>

  
    .panel-group .panel {
      border-radius: 10px;
      box-shadow: 10px;
      border-color: black !important;
      
  
    }


    .panel-title > a {
      display: block;
      padding: 5px;
      text-decoration: none;
    }
  
    .more-less {
      float: right;
      color: black;
    }
  

  


    </style>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

                                $run_job = mysqli_query($con,$get_job);
          
                                while($row_job=mysqli_fetch_array($run_job)){
                                    
                                

                                    $address = $row_job['address'];
                                    $email = $row_job['email'];
                                    $companyname = $row_job['companyname'];
                                    $district = $row_job['district'];
                                    $pincode = $row_job['pincode'];
                                    $phno = $row_job['phno'];
                                    $jobcode = $row_job['jobcode'];
                                    $jobname = $row_job['jobname'];
                                    $qualification = $row_job['qualification'];
                                    $jobdetails = $row_job['jobdetails'];
                                    $sl_no = $row_job['sl_no'];
                                   
                                    
                                   
                                  
                   
                    $i++;            
                               
                                    
               $data .='

               <div class="panel panel-default">
               <div class="panel-heading" role="tab" id="heading'.$i.'">
                 <h5 class="panel-title">
                   <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
                     <i class="more-less glyphicon glyphicon-plus"></i>
                     <div class="row">
                     <div class="col-md-6">
                     Job code: '.$jobcode.'<br>
                     Job Name: '.$jobname.'<br>
                     </div>
                     <div class="col-md-6">
                     Min Qualification: '.$qualification.'<br>
                     Company Name: '.$companyname.'<br>
                     </div>
                     </div>
                   </a>
                 </h5>
               </div>
               <div id="collapse'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$i.'">
                 <div class="panel-body">
              
                 <div class="row">
                 <div class="col-md-6">
                 <h4>Job Details</h4><br>
                '.$jobdetails.'<br>
                <button class="btn btn-primary" onclick="applyjob('.$sl_no.','.$slno.');">Apply Now</button>
                 </div>
                 <div class="col-md-6">
                 <h4>Company Details</h4><br>
                 Company Name:'.$companyname.'<br>
                 Address:'.$address.'<br>
                 District:'.$district.'<br>
                 Pincode:'.$pincode.'<br>
                 E-mail:'.$email.'<br>
                 Ph No:'.$phno.'<br>

                  </div>
                 </div>
                 </div>
               </div>
             </div>
         '      ;             

    

  

  
    }
    $data .="</div>
    <script>	function toggleIcon(e) {
      $(e.target)
          .prev('.panel-heading')
          .find('.more-less')
          .toggleClass('glyphicon-plus glyphicon-minus');
  }
  $('.panel-group').on('hidden.bs.collapse', toggleIcon);
  $('.panel-group').on('shown.bs.collapse', toggleIcon);
  </script>";
    echo $data;
  }
?>






