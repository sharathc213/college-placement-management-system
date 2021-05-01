              
<?php
// include Database connection file 
include("../../db.php");

$slno=$_POST['sl_no'];
// $get_com = "select * from company where email='$email'";
// $result_com = mysqli_query($con, $get_com);
// $row_com=mysqli_fetch_array($result_com);
// $com_code=$row_com['sl_no'];


$get_job="select jobuser.verify,company.email,company.companyname,company.address,company.district,company.pincode,company.phno,job.jobcode,job.jobname,job.qualification,job.sl_no, job.companycode,job.jobdetails,jobuser.userid from jobuser,job,company where jobuser.userid=$slno and jobuser.jobid=job.sl_no and job.companycode=company.sl_no  ";


$i=0;

// Design initial table header 
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
                                $verify = $row_job['verify'];
                                $userid = $row_job['userid'];
                               
                                
                               
                              
               
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
                 Company Name: '.$companyname.'<br>';
                 if($verify==1){
                  $data .='
                  Status:<b style="color:orange"> Applayed </b>';
                  }else if($verify==2){
                    $get_exam="select exam.tname,examuser.examid from examuser,exam where examuser.userid=$userid and examuser.jobcode='$jobcode' and exam.sl_no=examuser.examid ";
                    $run_exam = mysqli_query($con, $get_exam);

                    $row_exam = mysqli_fetch_array($run_exam);
                    $ename=$row_exam['tname'];
                   $data .='
                   Status: <b style="color:yellow"> Verified </b><button onclick="attendexam(`'.$jobcode.'`,'.$userid.',`'.$ename.'`);" class="btn btn-danger">Attand Exam</button>'; 
                  }else if($verify==4){
                   $data .='Status: <b style="color:green"> Approved </b><br><small style="color:black" > Please check your e-mail for further details</small>';
                  }else if($verify==3){
                   $data .='Status: <b style="color:red"> Application Rejected </b><br><small style="color:black" >You Are Not eligible for apply </small>';  
                  }else if($verify==5){
                    $get_job = "select * from job where jobcode='$jobcode'";
$result_job= mysqli_query($con, $get_job);
$row_job=mysqli_fetch_array($result_job);
$jobid=$row_job['sl_no'];

$get_exam="select exam.tname,examuser.examid from examuser,exam where examuser.userid=$userid and examuser.jobcode='$jobcode' and exam.sl_no=examuser.examid ";
$run_exam = mysqli_query($con, $get_exam);

$row_exam = mysqli_fetch_array($run_exam);
$ename=$row_exam['tname'];

$get_exam = "select * from exam where tname='$ename'";
$result_exam= mysqli_query($con, $get_exam);
$row_exam=mysqli_fetch_array($result_exam);
$eid=$row_exam['sl_no'];
                    $get_m="select * from examuser where userid=$userid && jobcode='$jobcode' && examid=$eid";
                    $run_m = mysqli_query($con, $get_m);

                    $row_m = mysqli_fetch_array($run_m);
                    $mark=$row_m['mark'];
                    $data .='Status: <b style="color:red"> Exam Attended </b><br><small style="color:black" >You Got '.$mark.' marks out of 5 In the exam</small>';  
                   }
                  $data .='   </div>
                 </div>
               </a>
             </h5>
           </div>
           <div id="collapse'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$i.'">
             <div class="panel-body">
          
             <div class="row">
             <div class="col-md-6">
             <h4>Job Details</h4><br>
           '.$jobdetails.'<br><br>';
          
           $data .='   </div>
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

?>






