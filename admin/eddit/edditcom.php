

               
<?php
	// include Database connection file 
	include("../../db.php");
if( isset($_POST['sl_no'])){
    
    $sl_no=$_POST['sl_no'];


                            
            $get_com = "select * from company where sl_no='$sl_no'";
            $run_com = mysqli_query($con,$get_com);
            $row_com = mysqli_fetch_array($run_com);

            $name = $row_com['companyname'];
            $address = $row_com['address'];
            $email = $row_com['email'];
            $password = $row_com['password'];
            $district = $row_com['district'];
            $pincode = $row_com['pincode'];
            $phno = $row_com['phno'];

    
    	$data = ' 
        <div class="row">
        <div class="col-lg-12">
     
          
          <form action="" method="post" role="form" class="contactForm">
            <mark><h3>General Information</h3></mark>
            <div class="form-group">
            <label >Company Name</label>
              <input value="'.$name.'" type="text" name="name" class="form-control" id="com_name" placeholder="Company Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validati" style="color:red"id="com_name_error"></div>
            </div>
        
            <div class="form-group">
            <label >Company Address</label>
              <textarea class="form-control" id="com_address" name="Company Address" rows="3" data-rule="required" data-msg="Please write the complete address" placeholder="Address">'.$address.'</textarea>
              <div class="validat" style="color:red" id="com_address_error"></div>
            </div>
            <div class="form-group">
            <label >Company District</label>
              <input value="'.$district.'" type="text" name="city" class="form-control" id="com_district" placeholder="City" data-rule="minlen:4" data-msg="Please enter the city" />
              <div class="valid" style="color:red" id="com_district_error"></div>
            </div>
            <div class="form-group">
            <label >Pincode</label>
              <input value='.$pincode.' type="number" name="Pincode" class="form-control" id="com_pincode" placeholder="Pincode" data-rule="minlen:6" data-msg="Please enter correct pincode" />
              <div class="validat"style="color:red" id="com_pincode_error"></div>
            </div>
            <div class="form-group">
            <label >Company E-mail</label>
              <input value="'.$email.'" disabled type="email" class="form-control" name="email" id="com_email" placeholder="Company Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="valid" style="color:red"id="com_email_error"></div>
            </div>

            <div class="form-group">
            <label >Password</label>
            <input value="'.$password.'"  type="text" class="form-control" name="password" id="com_password" placeholder="Company Password" data-rule="email" data-msg="Please enter a valid email" />
            <div class="valid" style="color:red"id="com_password_error"></div>
          </div>
    
                
            <div class="form-group">
            <label >Phone Number</label>
              <input value='.$phno.' type="number" name="Phone Number" class="form-control" id="com_number" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter correct phone number" />
              <div class="validat"style="color:red" id="com_number_error"></div>
            </div>
           
  
           

            <div class="text-center"><button type="button" onclick="updatecom('.$sl_no.');" class="btn btn-primary btn-lg">Update Company</button></div>
          </form>
        </div>

       
      </div>
       ';
    
    	 echo $data;
    	}

   

?>

