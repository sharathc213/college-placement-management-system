              
<?php
// include Database connection file 
include("../../db.php");

$jobcode=$_POST['jobcode'];
$userid=$_POST['userid'];
$ename=$_POST['ename'];


$get_job = "select * from job where jobcode='$jobcode'";
$result_job= mysqli_query($con, $get_job);
$row_job=mysqli_fetch_array($result_job);
$jobid=$row_job['sl_no'];



// Design initial table header 
$data ='
   
';
   
                                
           $data .='
           <h4>! IMPORTANT</h4>
           *   Do not refresh the page after the exam start untill the exam finish.otherwise your chance may be miss<br>
           *   You have 1 minut to cover 5 questions<br>
           *   The time starts after you click the start button<br>
           <button class="btn btn-primary" onclick="startexam(`'.$jobcode.'`,'.$userid.','.$jobid.',`'.$ename.'`);">Start Exam</button>
           
     '      ;             



echo $data;

?>






