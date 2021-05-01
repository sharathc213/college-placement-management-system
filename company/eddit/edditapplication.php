

               
<?php
// include Database connection file 
include("../../db.php");
if (isset($_POST['sl_no'])) {

    $sl_no = $_POST['sl_no'];


    $get_usr="select user.email,jobuser.verify,jobuser.userid,job.jobcode,job.qualification as mqualification,jobuser.sl_no as jusl,job.jobname,job.jobdetails,user.name,userdetails.dob,userdetails.address,userdetails.pincode,userdetails.district,userdetails.phno,userdetails.cv,userdetails.qualification,job.companycode from jobuser,job,user,userdetails where jobuser.sl_no=$sl_no and jobuser.jobid=job.sl_no and  userdetails.userid=jobuser.userid and user.sl_no=jobuser.userid  ";
    $run_usr = mysqli_query($con, $get_usr);

    $row_usr = mysqli_fetch_array($run_usr);


    $name = $row_usr['name'];
    $email = $row_usr['email'];



  
   $userid= $row_usr['userid'];



  


 

 $dob=$row_usr['dob'];
 $address=$row_usr['address'];
 $district=$row_usr['district'];
 $pincode=$row_usr['pincode'];
 $phno=$row_usr['phno'];
 $cv=$row_usr['cv'];
 $jobname=$row_usr['jobname'];
 $jobdetails=$row_usr['jobdetails'];
 $mqualification=$row_usr['mqualification'];
 $jobcode=$row_usr['jobcode'];
 $companycode=$row_usr['companycode'];
 $verify=$row_usr['verify'];
 $jusl=$row_usr['jusl'];

 
 $qualification=$row_usr['qualification'];
 $data ='

 <!--main content start-->
   
   
     
         
         <!-- page start-->
         <div class="row">
           <div class="col-lg-12">
             <section class="panel">
            
       
              
                 <div class="">
                
                   <!-- profile -->
                   <div id="profile" class="tab-pane">
                     <section class="panel">
                     <div class="panel-body bio-graph-info">
                     <h1>Job Details</h1>
                     <div class="row">
                       <div class="bio-row">
                         <p><span>Name </span>:'.$jobname.'  </p>
                       </div>
                       <?php
               
                       <div class="bio-row">
                         <p><span>Job Details </span>: '.$jobdetails.' </p>
                       </div>
                       <div class="bio-row">
                       <p><span>Job Code</span>: '.$jobcode.' </p>
                     </div>
                

                       <div class="bio-row">
                         <p><span>Min Qualification </span>:'.$mqualification.'</p>
                       </div>
           
                      


              
   
                
                     
         
                      
                    
                         <h1>User Details</h1>
                         <div class="row">
                           <div class="bio-row">
                             <p><span>Name </span>:'.$name.'  </p>
                           </div>
                           <?php
                   
                           <div class="bio-row">
                             <p><span>Address </span>: '.$address.' </p>
                           </div>
                    

                           <div class="bio-row">
                             <p><span>Email </span>:'.$email.'</p>
                           </div>
               
                           <div class="bio-row">
                             <p><span>pincode </span>: '.$pincode.' </p>
                           </div>
  
                           <div class="bio-row">
                             <p><span>DOB </span>:'.$dob.'</p>
                           </div>

                           <div class="bio-row">
                             <p><span>District </span>:'.$district.'</p>
                           </div>
       
                           <div class="bio-row">
                             <p><span>Qualification </span>:'.$qualification.'</p>
                           </div>
       
                         
                           <div class="bio-row">
                             <p><span>Country </span>: India</p>
                           </div>
                    
                           <div class="bio-row">
                             <p><span>CV</span>:'.$cv.'   <button onclick="verifypdf(`'.$cv.'`);" class="btn btn-primary">view</button></p>
                           </div>
              
                           <div class="bio-row">
                             <p><span>Mobile </span>:'.$phno.'</p>
                           </div>
                            
                     
                     </section>
             
                   </div>
 
                   <div class="form-group">
                   <label >Options</label>
                   <select id="options"  class="form-control" onchange="viewtd(this.value,'.$companycode.');">';
                   if($verify==1){
                     $data .=' <option selected value=1 >Applayed</option>
                     <option value=2 >Assign a Test</option>
                     <option value=3 >Rejact</option>';
                   }else if($verify==2){
                    $get_exam="select exam.tname,examuser.examid from examuser,exam where examuser.userid=$userid and examuser.jobcode='$jobcode' and exam.sl_no=examuser.examid ";
                    $run_exam = mysqli_query($con, $get_exam);

                    $row_exam = mysqli_fetch_array($run_exam);
                    $ename=$row_exam['tname'];

                     $q="select * from ";
                    $data .=' <option selected value=2 >Assigned a Test</option>
                    <option value=3 >Rejacted</option>';
                   }else if($verify==3){
                    $data .=' <option  selected value=3 >Rejacted</option>';
                   }else if($verify==4){
                    $data .=' <option selected value=4 >Approve</option>
                    <option   value=3 >Rejacted</option>';
                   }else if($verify==5){
                    $data .=' <option selected value=5 >Exam Attended</option>
                    <option  value=4 >Approve</option>
                    <option   value=3 >Rejacted</option>';
                   }
                   $data .='
                  
                   </select>
                     <div class="validati" style="color:red"id="job_qul_error"></div>
                   </div>
                   <div class="testd"></div>';
                   if($verify==2){
                   
                    $ename=$row_exam['tname'];
                    $data .=' <small>Exam Name:'.$ename.'</small><br>';
           
                   }
                   if($verify==5){
                   
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
                   
                  
                    $data .=' <small>'.$name.' got '.$mark.' marks out of 5 in exam  ' .$ename.'</small><br>';
           
                   }

                   $data .='    <button class="btn btn-primary" onclick="updateapplication('.$userid.','.$jusl.',`'.$jobcode.'`);">Update</button>
                  
';

    echo $data;
}



?>

 