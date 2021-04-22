
<?php



if (!isset($_SESSION['admin'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginadmin.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

?><section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12">
            <div class="recent">
             <center> <mark><h3>Register Company</h3></mark></center>
            </div>
            <div id="sendmessage">The Company has been added successfully</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <mark><h3>General Information</h3></mark>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="com_name" placeholder="Company Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validati" style="color:red"id="com_name_error"></div>
              </div>
              <!-- <div class="form-group">
                <input type="text" class="form-control" name="name" id="name"  placeholder="Owner Name" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div> -->
              <div class="form-group">
                <textarea class="form-control" id="com_address" name="Company Address" rows="3" data-rule="required" data-msg="Please write the complete address" placeholder="Address"></textarea>
                <div class="validat" style="color:red" id="com_address_error"></div>
              </div>
              <div class="form-group">
                <input type="text" name="city" class="form-control" id="com_district" placeholder="City" data-rule="minlen:4" data-msg="Please enter the city" />
                <div class="valid" style="color:red" id="com_district_error"></div>
              </div>
              <div class="form-group">
                <input type="number" name="Pincode" class="form-control" id="com_pincode" placeholder="Pincode" data-rule="minlen:6" data-msg="Please enter correct pincode" />
                <div class="validat"style="color:red" id="com_pincode_error"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="com_email" placeholder="Company Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="valid" style="color:red"id="com_email_error"></div>
              </div>
              <!-- <div class="form-group">
                        <label class="control-label ">Company Category</label>
                          <select class="form-control">
                                                  <option value="">- Choose Category -</option>
                                                  <option value="1">IT</option>
                                                  <option value="2">Bussiness</option>
                                                  <option value="3">Marketing</option>
                                                  <option value="4">Mechanical</option>
                                                </select>
                        </div> -->
                  
              <div class="form-group">
                <input type="number" name="Phone Number" class="form-control" id="com_number" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter correct phone number" />
                <div class="validat"style="color:red" id="com_number_error"></div>
              </div>
             
             <!-- <mark><h3>About Company</h3></mark>
             <div class="form-group">
                <textarea class="form-control" name="About Company" rows="3" data-rule="required" data-msg="Please write the About your Company" placeholder="About Company"></textarea>
                <div class="validation"></div>
              </div> -->
             

              <div class="text-center"><button type="button" onclick="add_company();" class="btn btn-primary btn-lg">Add Company</button></div>
            </form>
          </div>

         
        </div>
    </section></section>
    <?php } ?>