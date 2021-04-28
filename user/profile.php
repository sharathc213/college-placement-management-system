
<?php
   if (!isset($_SESSION['user'])  || !isset($_SESSION['username'])) {

echo "<script>window.open(''../loginuser.php','_self'')</script>";
} else {
$username = $_SESSION['username'];
$get_usr = "select * from user where email='$username'";
$result_usr = mysqli_query($con, $get_usr);
$row_usr=mysqli_fetch_array($result_usr);
$slno=$row_usr['sl_no'];
$name=$row_usr['name'];

$get_usrd = "select * from userdetails where userid=$slno";
$result_usrd = mysqli_query($con, $get_usrd);
$row_usrd=mysqli_fetch_array($result_usrd);
$dob=$row_usrd['dob'];
$address=$row_usrd['address'];
$district=$row_usrd['district'];
$pincode=$row_usrd['pincode'];
$phno=$row_usrd['phno'];
$cv=$row_usrd['cv'];

$qualification=$row_usrd['qualification'];

$sl_no=$row_usrd['sl_no'];
?> <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
    
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
           <div class="profile-widget profile-widget-info">
              <div class="panel-body">
              <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $name; ?></h4>
                  <div class="follow-ava">
                    <img src="img/profile-widget-avatar.jpg" alt="">
                  </div>
                  <h6>Administrator</h6>
                </div>

         
           
       
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="recent-activity" class="tab-pane active">
                    <div class="profile-activity">
                     

                    </div>
                  </div>
                  <!-- profile -->
                  <div id="profile" class="tab-pane">
                    <section class="panel">
                     
                      <div class="panel-body bio-graph-info">
                        <h1>Details</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>Name </span>: <?php echo $name; ?>  </p>
                          </div>
                          <?php
                        if($address!=""){
                          ?>
                          <div class="bio-row">
                            <p><span>Address </span>: <?php echo $address; ?> </p>
                          </div>
                          <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>Address </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>
                          <div class="bio-row">
                            <p><span>Email </span>:<?php echo $username; ?></p>
                          </div>
                          <?php
                        if($pincode!="" && $pincode!=0){
                          ?>
                          <div class="bio-row">
                            <p><span>pincode </span>: <?php echo $pincode; ?> </p>
                          </div>
                          <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>Pincode </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>
                          <?php
                        if($dob!="" &&  $dob!="0000-00-00"){
                          ?>
                          <div class="bio-row">
                            <p><span>DOB </span>:<?php echo $dob; ?></p>
                          </div>
                          <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>DOB </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>

                        
                          <?php
                        if($district!=""){
                          ?>
                        
                          <div class="bio-row">
                            <p><span>District </span>:<?php echo $district; ?></p>
                          </div>
                          <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>District </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>
                        

                          <?php
                        if($qualification!=""){
                          ?>
                          <div class="bio-row">
                            <p><span>Qualification </span>:<?php echo $qualification; ?></p>
                          </div>
                          <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>Qualification </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>
                        
                          <div class="bio-row">
                            <p><span>Country </span>: India</p>
                          </div>
                          
                          <?php
                        if($cv!="" ){
                          ?>
                          <div class="bio-row">
                            <p><span>CV</span>:<?php echo $cv; ?>   <button onclick="verifypdf('<?php echo $cv; ?>');" class="btn btn-primary">view</button></p>
                          </div>
                          <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>CV </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>
                        <?php
                        if($phno!="" && $phno!=0){
                          ?>
                          <div class="bio-row">
                            <p><span>Mobile </span>:<?php echo $phno; ?></p>
                          </div>
                             <?php
                       } else{
                          ?>
                             <div class="bio-row">
                            <p><span>Mobile </span>:</p>
                          </div>
                           <?php  
                       } 
                          ?>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>


                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-6">
                              <input type="text" value="<?php echo $name; ?>" class="form-control" id="name" placeholder="Name ">
                              <div class="validati" style="color:red"id="name_error"></div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">DOB</label>
                            <div class="col-lg-6">
                            <?php  if($dob!=0){?>
                              <input type="date" value="<?php echo $dob; ?>" class="form-control" id="dob" placeholder="DOB ">
                              <?php }else{?>
                                <input type="date"  class="form-control" id="name" placeholder="DOB ">
                                <?php }?>
                              <div class="validati" style="color:red"id="dob_error"></div>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Qualification</label>
                            <div class="col-lg-6">
                            <select id="qua"  class="form-control" >
                            <?php  if($qualification==""){?>
                            <option selected disabled>Please select a Min Qualification</option>
                            <?php }else{?>
                            <option selected value="<?php echo $qualification; ?>"><?php echo $qualification; ?></option>
                            <?php
                            }
$get_qua = "select * from qualification ";
$run_qua = mysqli_query($con, $get_qua);

while ($row_qua = mysqli_fetch_array($run_qua)) {

    $qname = $row_qua['qname'];


    $data = '';
    $data .= '
<option value="' . $qname . '" >' . $qname . '</option>';
    echo $data;
}   ?> 
</select>
                              <div class="validati" style="color:red"id="qualification_error"></div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-10">
                              <textarea name="" id="address" class="form-control" cols="30" rows="5"><?php echo $address; ?></textarea>
                              <div class="validati" style="color:red"id="address_error"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">District</label>
                            <div class="col-lg-6">
                              <input value="<?php echo $district; ?>" type="text" class="form-control" id="district" placeholder="District ">
                              <div class="validati" style="color:red"id="district_error"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pincode</label>
                            <div class="col-lg-6">
                            <?php  if($pincode!=0){?>
                              <input value="<?php echo $pincode; ?>" type="text" class="form-control" id="pincode" placeholder="Pincode ">
                              <?php }else{?>
                                <input  type="text" class="form-control" id="pincode" placeholder="Pincode ">
                                <?php }?>
                              <div class="validati" style="color:red"id="pincode_error"></div>
                            </div>
                          </div>
                        
                         
                          <div class="form-group">
                        
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                            <?php  if($phno!=0){?>
                              <input value="<?php echo $phno; ?>" type="text" class="form-control" id="number" placeholder=" Mobile">
                              <?php }else{?>
                                <input  type="text" class="form-control" id="number" placeholder=" Mobile">
                                <?php }?>
                              <div class="validati" style="color:red"id="number_error"></div>
                            </div>
                          </div>
                          <div class="form-group">
                        
                        <label class="col-lg-2 control-label">CV</label>
                        <div class="col-lg-6">
                       
                          <input  type="file" class="form-control" id="cv" >

                          <?php  if($cv!=""){?>
                         <div><div id="fil"><?php echo $cv; ?></div><button onclick="verifypdf('<?php echo $cv; ?>');" class="btn btn-primary">view</button></div>
                         <?php  }?>
                       
                          <div class="validati" style="color:red"id="cv_error"></div>
                        </div>
                      </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button  class="btn btn-primary" onclick="updateusr(<?php echo $slno; ?>);">Update</button>
                        
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
<?php } ?>