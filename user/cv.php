<?php



if (!isset($_SESSION['user'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginuser.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

?>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent">
                        <center><h1>Curriculum Vitae</h1></center>
                    </div>
                    <div id="sendmessage">CV has been added successfully</div>
                    <div id="errormessage"></div>
                    <form  class="contactForm" action="">
                    <div class="form-group">
                            <input type="text" class="form-control" id="cv_name" data-msg="Please write the name" placeholder="User Id"></input>
                            <div class="valid" style="color: red" id="cv_name_error" ></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="cv_address" rows="3" data-rule="required" data-msg="Please write the complete address" placeholder="Address"></textarea>
                            <div class="valid" style="color: red" id="cv_address_error"></div>
                        </div>
                        <div class="form-group">
                    <label>Date Of Birth</label>
                    <div class="form-group">
                        <input type="date" class="form-control" id="bday" placeholder=" ">
                        <div class="valid" style="color: red" id="bday_error"></div>
                    </div>
                </div>
                        <div class="form-group">
                            <input type="number"  class="form-control" id="cv_ph" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter correct phone number" />
                            <div class="valid" style="color: red" id="cv_ph_error"></div>
                        </div>
                        <div class="form-group">
                <input type="text" class="form-control" id="cv_district" placeholder="District" data-rule="minlen:4" data-msg="Please enter the city" />
                <div class="valid" style="color:red" id="cv_district_error"></div>
              </div>
              <div class="form-group">
                <input type="number"  class="form-control" id="cv_pincode" placeholder="Pincode" data-rule="minlen:6" data-msg="Please enter correct pincode" />
                <div class="validat"style="color:red" id="cv_pincode_error"></div>
              </div>
                <div class="mb-3">
                 <label for="formFile" class="form-label">Add CV File</label>
                <input class="form-control" type="file" id="formfile">
                <div class="" style="color: red" id="formfile_error"></div>
                </div>
                <h3>Education And Qualifications</h3>
                <div class="form-group">
                    <textarea class="form-control" id="cv_ed"  rows="5" data-rule="required" data-msg="Please write about your education" placeholder="Education details"></textarea>
                    <div class="valid"  style="color: red" id="cv_ed_error" ></div>
                </div>          
                <div class="text-center"><button type="button" onclick="add_cv();" class="btn btn-primary btn-lg">Add CV</button></div>
                </form>
            </div>


            </div>
        </section>
    </section>
    <?php } ?>