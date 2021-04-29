

               
<?php
// include Database connection file 
include("../../db.php");
if (isset($_POST['sl_no'])) {

    $sl_no = $_POST['sl_no'];


    $get_usr="select user.email,jobuser.verify,job.jobcode,job.jobname,user.name,userdetails.dob,userdetails.address,userdetails.pincode,userdetails.district,userdetails.phno,userdetails.cv,userdetails.qualification from jobuser,job,user,userdetails where jobuser.sl_no=$sl_no and jobuser.jobid=job.sl_no and  userdetails.userid=jobuser.userid and user.sl_no=jobuser.userid  ";
    $run_usr = mysqli_query($con, $get_usr);

    $row_usr = mysqli_fetch_array($run_usr);


    $name = $row_usr['name'];
    $email = $row_usr['email'];



  




  


 

 $dob=$row_usr['dob'];
 $address=$row_usr['address'];
 $district=$row_usr['district'];
 $pincode=$row_usr['pincode'];
 $phno=$row_usr['phno'];
 $cv=$row_usr['cv'];
 
 $qualification=$row_usr['qualification'];
 $data ='

 <!--main content start-->
   
   
     
         
         <!-- page start-->
         <div class="row">
           <div class="col-lg-12">
             <section class="panel">
            
       
               <div class="panel-body">
                 <div class="">
                
                   <!-- profile -->
                   <div id="profile" class="tab-pane">
                     <section class="panel">
                      
                       <div class="panel-body bio-graph-info">
                         <h1>Details</h1>
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
                             <p><span>CV</span>:'.$cv.'   <button onclick="verifypdf('.$cv.');" class="btn btn-primary">view</button></p>
                           </div>
              
                           <div class="bio-row">
                             <p><span>Mobile </span>:'.$phno.'</p>
                           </div>
                             
                         </div>
                       </div>
                     </section>
                     <section>
                       <div class="row">
                       </div>
                     </section>
                   </div>
 
 
                  
';

    echo $data;
}



?>

 