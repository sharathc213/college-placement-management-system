<?php



if (!isset($_SESSION['company'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../logincompany.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];
    $get_com = "select * from company where email='$username'";
    $result_com = mysqli_query($con, $get_com);
    $row_com=mysqli_fetch_array($result_com);
    $com_code=$row_com['sl_no'];

?>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent">
                        <center> <mark><h3>Create New Quick Test</h3></mark></center>
                    </div>
                    <div  class="form-group">
                            <input   style="text-transform:uppercase" class="form-control" id="tname" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Test Name"/>
                            <div class="valid"  style="color:red" id="tname_error" ></div>
                        </div>
                 

                        <div  class="form-group">
                            <textarea   style="text-transform:uppercase" class="form-control" id="q1"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 1"></textarea>
                            <div class="valid"  style="color:red" id="q1_error" ></div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a11"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1"></textarea>
                            <div class="valid"  style="color:red" id="a11_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a12" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2"></textarea>
                            <div class="valid"  style="color:red" id="a12_error" ></div>
                        </div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a13" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3"></textarea>
                            <div class="valid"  style="color:red" id="a13_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a14" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4"></textarea>
                            <div class="valid"  style="color:red" id="a14_error" ></div>
                        </div>
                        </div>
                        <div  class="form-group">
                            <select  style="text-transform:uppercase" class="form-control" id="a1"  >
                            <option selected disabled>Please select any one of the answer</option>
                            <option value=1>Option 1</option>
                            <option value=2>Option 2</option>
                            <option value=3>Option 3</option>
                            <option value=4>Option 4</option></select>
                            <div class="valid"  style="color:red" id="a1_error" ></div>
                        </div>







                        <div  class="form-group">
                            <textarea   style="text-transform:uppercase" class="form-control" id="q2" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 2"></textarea>
                            <div class="valid"  style="color:red" id="q2_error" ></div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a21" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1"></textarea>
                            <div class="valid"  style="color:red" id="a21_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a22" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2"></textarea>
                            <div class="valid"  style="color:red" id="a22_error" ></div>
                        </div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a23"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3"></textarea>
                            <div class="valid"  style="color:red" id="a23_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a24"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4"></textarea>
                            <div class="valid"  style="color:red" id="a24_error" ></div>
                        </div>
                        </div>
                        <div  class="form-group">
                            <select  style="text-transform:uppercase" class="form-control" id="a2"  >
                            <option selected disabled>Please select any one of the answer</option>
                            <option value=1>Option 1</option>
                            <option value=2>Option 2</option>
                            <option value=3>Option 3</option>
                            <option value=4>Option 4</option></select>
                            <div class="valid"  style="color:red" id="a2_error" ></div>
                        </div>









                        <div  class="form-group">
                            <textarea   style="text-transform:uppercase" class="form-control" id="q3" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 3"></textarea>
                            <div class="valid"  style="color:red" id="q3_error" ></div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a31" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1"></textarea>
                            <div class="valid"  style="color:red" id="a31_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a32" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2"></textarea>
                            <div class="valid"  style="color:red" id="a32_error" ></div>
                        </div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a33"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3"></textarea>
                            <div class="valid"  style="color:red" id="a33_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a34"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4"></textarea>
                            <div class="valid"  style="color:red" id="a34_error" ></div>
                        </div>
                        </div>
                        <div  class="form-group">
                            <select  style="text-transform:uppercase" class="form-control" id="a3"  >
                            <option selected disabled>Please select any one of the answer</option>
                            <option value=1>Option 1</option>
                            <option value=2>Option 2</option>
                            <option value=3>Option 3</option>
                            <option value=4>Option 4</option></select>
                            <div class="valid"  style="color:red" id="a3_error" ></div>
                        </div>








                        <div  class="form-group">
                            <textarea   style="text-transform:uppercase" class="form-control" id="q4" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 4"></textarea>
                            <div class="valid"  style="color:red" id="q4_error" ></div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a41"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1"></textarea>
                            <div class="valid"  style="color:red" id="a41_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a42"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2"></textarea>
                            <div class="valid"  style="color:red" id="a42_error" ></div>
                        </div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a43" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3"></textarea>
                            <div class="valid"  style="color:red" id="a43_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a44" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4"></textarea>
                            <div class="valid"  style="color:red" id="a44_error" ></div>
                        </div>
                        </div>
                        <div  class="form-group">
                            <select  style="text-transform:uppercase" class="form-control" id="a4"  >
                            <option selected disabled>Please select any one of the answer</option>
                            <option value=1>Option 1</option>
                            <option value=2>Option 2</option>
                            <option value=3>Option 3</option>
                            <option value=4>Option 4</option></select>
                            <div class="valid"  style="color:red" id="a4_error" ></div>
                        </div>








                        <div  class="form-group">
                            <textarea   style="text-transform:uppercase" class="form-control" id="q5" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 5"></textarea>
                            <div class="valid"  style="color:red" id="q5_error" ></div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a51"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1"></textarea>
                            <div class="valid"  style="color:red" id="a51_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a52"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2"></textarea>
                            <div class="valid"  style="color:red" id="a52_error" ></div>
                        </div>
                        </div>
                        <div class="row">
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a53"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3"></textarea>
                            <div class="valid"  style="color:red" id="a53_error" ></div>
                        </div>
                        <div  class="form-group col-md-6">
                            <textarea   style="text-transform:uppercase" class="form-control" id="a54"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4"></textarea>
                            <div class="valid"  style="color:red" id="a54_error" ></div>
                        </div>
                        </div>
                        <div  class="form-group">
                            <select  style="text-transform:uppercase" class="form-control" id="a5"  >
                            <option selected disabled>Please select any one of the answer</option>
                            <option value=1>Option 1</option>
                            <option value=2>Option 2</option>
                            <option value=3>Option 3</option>
                            <option value=4>Option 4</option></select>
                            <div class="valid"  style="color:red" id="a5_error" ></div>
                        </div>


                        <div class="text-center"><button type="button" onclick="addtest(<?php echo $com_code ?>);" class="btn btn-primary btn-lg">New Test</button></div>
                    </form>
                </div>


            </div>
        </section>
    </section>
    <?php } ?>