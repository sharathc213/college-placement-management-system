

               
<?php
	// include Database connection file 
	include("../../db.php");
if( isset($_POST['sl_no']) && isset($_POST['comcode'])){
    
    $sl_no=$_POST['sl_no'];
    $comcode=$_POST['comcode'];


                            
            $get_test = "select * from exam where sl_no='$sl_no'";
            $run_test = mysqli_query($con,$get_test);
            $row_test = mysqli_fetch_array($run_test);

            $tname = $row_test['tname'];
            $q1 = $row_test['q1'];
            $q2 = $row_test['q2'];
            $q3 = $row_test['q3'];
            $q4 = $row_test['q4'];
            $q5 = $row_test['q5'];


            $a1 = $row_test['a1'];
            $a2 = $row_test['a2'];
            $a3 = $row_test['a3'];
            $a4 = $row_test['a4'];
            $a5 = $row_test['a5'];

            $a11 = $row_test['a11'];
            $a12 = $row_test['a12'];
            $a13 = $row_test['a13'];
            $a14 = $row_test['a14'];
            

            $a21 = $row_test['a21'];
            $a22 = $row_test['a22'];
            $a23 = $row_test['a23'];
            $a24 = $row_test['a24'];

            $a31 = $row_test['a31'];
            $a32 = $row_test['a32'];
            $a33 = $row_test['a33'];
            $a34 = $row_test['a34'];

            $a41 = $row_test['a41'];
            $a42 = $row_test['a42'];
            $a43 = $row_test['a43'];
            $a44 = $row_test['a44'];
        
            $a51 = $row_test['a51'];
            $a52 = $row_test['a52'];
            $a53 = $row_test['a53'];
            $a54 = $row_test['a54'];

    

    
    	$data = ' 
        <div class="recent">
        <center> <mark><h3>Eddit Quick Test</h3></mark></center>
    </div>
        
        <div  class="form-group">
        <span>Test Name</span>
        <input  value="'.$tname.'" style="text-transform:uppercase" class="form-control" id="tname" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Test Name"/>
        <div class="valid"  style="color:red" id="tname_error" ></div>
    </div>


    <div  class="form-group">
    <span>Question 1</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="q1"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 1">'.$q1.'</textarea>
        <div class="valid"  style="color:red" id="q1_error" ></div>
    </div>
    <div class="row">
    
    <div  class="form-group col-md-6">
    <span>Option 1</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a11"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1">'.$a11.'</textarea>
        <div class="valid"  style="color:red" id="a11_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 2</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a12" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2">'.$a12.'</textarea>
        <div class="valid"  style="color:red" id="a12_error" ></div>
    </div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 3</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a13" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3">'.$a13.'</textarea>
        <div class="valid"  style="color:red" id="a13_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 4</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a14" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4">'.$a14.'</textarea>
        <div class="valid"  style="color:red" id="a14_error" ></div>
    </div>
    </div>
    <div  class="form-group">
    <span>Answer</span>
        <select  style="text-transform:uppercase" class="form-control" id="a1"  >
        <option value='.$a1.' selected >Option '.$a1.'</option>
        <option value=1>Option 1</option>
        <option value=2>Option 2</option>
        <option value=3>Option 3</option>
        <option value=4>Option 4</option></select>
        <div class="valid"  style="color:red" id="a1_error" ></div>
    </div>







    <div  class="form-group">
    <span>Question 2</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="q2" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 2">'.$q2.'</textarea>
        <div class="valid"  style="color:red" id="q2_error" ></div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 1</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a21" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1">'.$a21.'</textarea>
        <div class="valid"  style="color:red" id="a21_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 2</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a22" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2">'.$a22.'</textarea>
        <div class="valid"  style="color:red" id="a22_error" ></div>
    </div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 3</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a23"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3">'.$a23.'</textarea>
        <div class="valid"  style="color:red" id="a23_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 4</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a24"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4">'.$a24.'</textarea>
        <div class="valid"  style="color:red" id="a24_error" ></div>
    </div>
    </div>
    <div  class="form-group">
    <span>Answer</span>
        <select  style="text-transform:uppercase" class="form-control" id="a2"  >
        <option value='.$a2.' selected >Option '.$a2.'</option>
        <option value=1>Option 1</option>
        <option value=2>Option 2</option>
        <option value=3>Option 3</option>
        <option value=4>Option 4</option></select>
        <div class="valid"  style="color:red" id="a2_error" ></div>
    </div>









    <div  class="form-group">
    <span>Question 3</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="q3" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 3">'.$q3.'</textarea>
        <div class="valid"  style="color:red" id="q3_error" ></div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 1</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a31" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1">'.$a31.'</textarea>
        <div class="valid"  style="color:red" id="a31_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 2</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a32" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2">'.$a32.'</textarea>
        <div class="valid"  style="color:red" id="a32_error" ></div>
    </div>
    </div>
    <div class="row">
  
    <div  class="form-group col-md-6">
    <span>Option 3</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a33"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3">'.$a33.'</textarea>
        <div class="valid"  style="color:red" id="a33_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 4</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a34"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4">'.$a34.'</textarea>
        <div class="valid"  style="color:red" id="a34_error" ></div>
    </div>
    </div>
    <div  class="form-group">
    <span>Answer</span>
        <select  style="text-transform:uppercase" class="form-control" id="a3"  >
        <option value='.$a3.' selected >Option '.$a3.'</option>
        <option value=1>Option 1</option>
        <option value=2>Option 2</option>
        <option value=3>Option 3</option>
        <option value=4>Option 4</option></select>
        <div class="valid"  style="color:red" id="a3_error" ></div>
    </div>








    <div  class="form-group">
    <span>Question 4</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="q4" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 4">'.$q4.'</textarea>
        <div class="valid"  style="color:red" id="q4_error" ></div>
    </div>
    <div class="row">
    
    <div  class="form-group col-md-6">
    <span>Option 1</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a41"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1">'.$a41.'</textarea>
        <div class="valid"  style="color:red" id="a41_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 2</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a42"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2">'.$a42.'</textarea>
        <div class="valid"  style="color:red" id="a42_error" ></div>
    </div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 3</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a43" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3">'.$a43.'</textarea>
        <div class="valid"  style="color:red" id="a43_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 4</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a44" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4">'.$a44.'</textarea>
        <div class="valid"  style="color:red" id="a44_error" ></div>
    </div>
    </div>
    <div  class="form-group">
    <span>Answer</span>
        <select  style="text-transform:uppercase" class="form-control" id="a4"  >
        <option value='.$a4.' selected >Option '.$a4.'</option>
        <option value=1>Option 1</option>
        <option value=2>Option 2</option>
        <option value=3>Option 3</option>
        <option value=4>Option 4</option></select>
        <div class="valid"  style="color:red" id="a4_error" ></div>
    </div>








    <div  class="form-group">
    <span>Question 5</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="q5" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="question 5">'.$q5.'</textarea>
        <div class="valid"  style="color:red" id="q5_error" ></div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 1</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a51"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 1">'.$a51.'</textarea>
        <div class="valid"  style="color:red" id="a51_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 2</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a52"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 2">'.$a52.'</textarea>
        <div class="valid"  style="color:red" id="a52_error" ></div>
    </div>
    </div>
    <div class="row">
    <div  class="form-group col-md-6">
    <span>Option 3</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a53"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 3">'.$a53.'</textarea>
        <div class="valid"  style="color:red" id="a53_error" ></div>
    </div>
    <div  class="form-group col-md-6">
    <span>Option 4</span>
        <textarea   style="text-transform:uppercase" class="form-control" id="a54"  rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Option 4">'.$a54.'</textarea>
        <div class="valid"  style="color:red" id="a54_error" ></div>
    </div>
    </div>
    <div  class="form-group">
    <span>Answer</span>
        <select  style="text-transform:uppercase" class="form-control" id="a5"  >
        <option value='.$a5.' selected >Option '.$a5.'</option>
        <option value=1>Option 1</option>
        <option value=2>Option 2</option>
        <option value=3>Option 3</option>
        <option value=4>Option 4</option></select>
        <div class="valid"  style="color:red" id="a5_error" ></div>
    </div>


    <div class="text-center"><button type="button" onclick="updatetest('.$sl_no.','.$comcode.');" class="btn btn-primary btn-lg">UPDATE</button></div>

      </div>
       ';
    
    	 echo $data;
    	}

   

?>

 