
<?php
   if (!isset($_SESSION['company'])  || !isset($_SESSION['username'])) {

echo "<script>window.open(''../logincompany.php','_self'')</script>";
} else {
$username = $_SESSION['username'];
$get_com = "select * from company where email='$username'";
$result_com = mysqli_query($con, $get_com);
$row_com=mysqli_fetch_array($result_com);
$com_name=$row_com['companyname'];
$address=$row_com['address'];
$district=$row_com['district'];
$pincode=$row_com['pincode'];
$phno=$row_com['phno'];
$sl_no=$row_com['sl_no'];
?> <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
    
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
           <div class="profile-widget profile-widget-info">
              <div class="panel-body">
              <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $username; ?></h4>
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
                            <p><span>company Name </span>: <?php echo $com_name; ?>  </p>
                          </div>

                          <div class="bio-row">
                            <p><span>Address </span>: <?php echo $address; ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:<?php echo $username; ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>pincode </span>: <?php echo $pincode; ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile </span>:<?php echo $phno; ?></p>
                          </div>

                        

                        
                     
                        
                          <div class="bio-row">
                            <p><span>District </span>:<?php echo $district; ?></p>
                          </div>
                        
                          <div class="bio-row">
                            <p><span>Country </span>: India</p>
                          </div>
                       
                        
                        
                       
                        
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
                            <label class="col-lg-2 control-label">company Name</label>
                            <div class="col-lg-6">
                              <input type="text" value="<?php echo $com_name; ?>" class="form-control" id="com_name" placeholder="company Name ">
                              <div class="validati" style="color:red"id="com_name_error"></div>
                            </div>
                          </div>
                  
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-10">
                              <textarea name="" id="com_address" class="form-control" cols="30" rows="5"><?php echo $address; ?></textarea>
                              <div class="validati" style="color:red"id="com_address_error"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">District</label>
                            <div class="col-lg-6">
                              <input value="<?php echo $district; ?>" type="text" class="form-control" id="com_district" placeholder="District ">
                              <div class="validati" style="color:red"id="com_district_error"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pincode</label>
                            <div class="col-lg-6">
                              <input value="<?php echo $pincode; ?>" type="text" class="form-control" id="com_pincode" placeholder="Pincode ">
                              <div class="validati" style="color:red"id="com_pincode_error"></div>
                            </div>
                          </div>
                        
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                              <input value="<?php echo $phno; ?>" type="text" class="form-control" id="com_number" placeholder=" Mobile">
                              <div class="validati" style="color:red"id="com_number_error"></div>
                            </div>
                          </div>
                        

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button  class="btn btn-primary" onclick="updatecom(<?php echo $sl_no; ?>);">Update</button>
                        
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