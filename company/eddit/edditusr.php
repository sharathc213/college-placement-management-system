

               
<?php
// include Database connection file 
include("../../db.php");
if (isset($_POST['sl_no'])) {

    $sl_no = $_POST['sl_no'];


    $get_usr = "select * from user where sl_no=$sl_no ";
    $run_usr = mysqli_query($con, $get_usr);

    $row_usr = mysqli_fetch_array($run_usr);


    $name = $row_usr['name'];
    $email = $row_usr['email'];



  




  


 
 $get_usrd = "select * from userdetails where userid=$sl_no";
 $result_usrd = mysqli_query($con, $get_usrd);
 $row_usrd=mysqli_fetch_array($result_usrd);
 $dob=$row_usrd['dob'];
 $address=$row_usrd['address'];
 $district=$row_usrd['district'];
 $pincode=$row_usrd['pincode'];
 $phno=$row_usrd['phno'];
 $cv=$row_usrd['cv'];
 
 $qualification=$row_usrd['qualification'];
 $data ='

 <!--main content start-->
   
   
     
         <div class="row">
           <!-- profile-widget -->
           <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
               <div class="panel-body">
               <div class="col-lg-2 col-sm-2">
                  
                   <div class="follow-ava">
                     <img src="img/profile-widget-avatar.jpg" alt="">
                   </div>
                   <h6>'.$name.'</h6>
                 </div>
 
          
            
        
               </div>
             </div>
           </div>
         </div>
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
                             <p><span>CV</span>:'.$cv.'   <button onclick="verifypdf(`'.$cv.'`);" class="btn btn-primary">view</button></p>
                           </div>
              
                           <div class="bio-row">
                             <p><span>Mobile </span>:'.$phno.'</p>
                           </div>
                             
                         </div>
                       </div>
                       <div class="cv">
                       </div>
                     </section>
                     <section>
                       
                     </section>
                   </div>
 
 
                  
';

    echo $data;
}



?>

 