              
<?php
// include Database connection file 
include("../../db.php");

$comcode=$_POST['comcode'];



$get_test="select * from exam   where comcode=$comcode order by sl_no";




// Design initial table header 
$data = '  

<div class="form-group">
<label >Select your Test</label>
<select id="test"  class="form-control">
<option value=111 disabled selected >Please select a Test name</option>

 ';
  $run_test = mysqli_query($con,$get_test);
      
  while($row_test=mysqli_fetch_array($run_test)){


    $name=$row_test['tname'];
    $examid=$row_test['sl_no'];

    $data .= '  <option value='.$examid.' >'.$name.'</option>';
  }
    $data .= '  </select>
  <div class="validati" style="color:red" id="test_error"></div>
</div>
         ';

echo $data;

?>






