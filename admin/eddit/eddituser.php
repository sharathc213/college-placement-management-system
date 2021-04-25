

               
<?php
	// include Database connection file 
	include("../../db.php");
if( isset($_POST['sl_no']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['status'])){
    
    $sl_no=$_POST['sl_no'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $status=$_POST['status'];


                            
            $get_usr = "select * from userdetails where userid='$sl_no'";
            $run_usr = mysqli_query($con,$get_usr);
            $row_usr = mysqli_fetch_array($run_usr);

            
            $address = $row_usr['address'];
           
       
            $district = $row_usr['district'];
            $pincode = $row_usr['pincode'];
            $phno = $row_usr['phno'];
            $qualification = $row_usr['qualification'];
            $cv = $row_usr['cv'];

    
    	$data = ' 
        <div class="row">
        <div class="col-lg-12">
     
          
        
            <mark><h3>General Information</h3></mark>
            <div class="form-group">
            <label >Name</label>
              <input disabled  value="'.$name.'" type="text" name="name" class="form-control" id="usr_name" placeholder="user Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validati" style="color:red"id="usr_name_error"></div>
            </div>
        
            <div class="form-group">
            <label >Address</label>
              <textarea disabled  class="form-control" id="usr_address" name="user Address" rows="3" data-rule="required" data-msg="Please write the usrplete address" placeholder="Address">'.$address.'</textarea>
              <div class="validat" style="color:red" id="usr_address_error"></div>
            </div>
            <div class="form-group">
            <label >District</label>
              <input disabled  value="'.$district.'" type="text" name="city" class="form-control" id="usr_district" placeholder="City" data-rule="minlen:4" data-msg="Please enter the city" />
              <div class="valid" style="color:red" id="usr_district_error"></div>
            </div>
            <div class="form-group">
            <label >Pincode</label>
              <input disabled value='.$pincode.' type="number" name="Pincode" class="form-control" id="usr_pincode" placeholder="Pincode" data-rule="minlen:6" data-msg="Please enter correct pincode" />
              <div class="validat"style="color:red" id="usr_pincode_error"></div>
            </div>
            <div class="form-group">
            <label >E-mail</label>
              <input disabled  value="'.$email.'" disabled type="email" class="form-control" name="email" id="usr_email" placeholder="user Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="valid" style="color:red"id="usr_email_error"></div>
            </div>

    
    
                
            <div class="form-group">
            <label >Phone Number</label>
              <input disabled  value='.$phno.' type="number" name="Phone Number" class="form-control" id="usr_number" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter correct phone number" />
              <div class="validat"style="color:red" id="usr_number_error"></div>
            </div>
           
            <div class="form-group">
            <label >Qualification</label>
              <input disabled  value="'.$qualification.'" type="text" name="Phone Number" class="form-control" id="usr_number" placeholder="Phone Number" data-rule="minlen:10" data-msg="Please enter correct phone number" />
              <div class="validat"style="color:red" id="usr_number_error"></div>
            </div>
  
     
            <label >CV</label>';

            if($cv==""){
              $data .= '      <button disabled  class="btn btn-danger" id="usr_number" >view</button>';
            }else{
              $data .= '      <button   class="btn btn-success">view</button>';
             
            }
          
           if($status==2){
            $data .= "      <div class='text-center'><button  onclick='verifyusr($sl_no,1);' class='btn btn-primary btn-lg'>VERIFY</button> <br>";
           }else if($status==1){
            $data .= "      <div class='text-center'><button  onclick='verifyusr($sl_no,2);' class='btn btn-danger btn-lg'>CANCLE VERIFY</button> <br>";
           }

              $data .= '      
             <br> <div class="text-center">  <button  onclick="viewcandidate()" class="btn btn-primary btn-lg">Cancel</button></div>
          
        </div>

       
      </div>
       ';
    
    	 echo $data;
    	}

   

?>

