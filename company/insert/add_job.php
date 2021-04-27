


<?php
if (isset($_POST['job_name']) && isset($_POST['job_qua']) && isset($_POST['job_details']) && isset($_POST['email']) && isset($_POST['job_code'])) {

    // include Database connection file 
    include("../../db.php");

    $job_code = $_POST['job_code'];
    $job_name = $_POST['job_name'];
    $job_details = $_POST['job_details'];
    $email = $_POST['email'];
    $job_qua = $_POST['job_qua'];
    $get_com = "select * from company where email='$email'";
    $result_com = mysqli_query($con, $get_com);
    $row_com=mysqli_fetch_array($result_com);
    $com_code=$row_com['sl_no'];


    $check = "select * from job where (jobname = '$job_name' AND jobdetails= '$job_details')or jobcode='$job_code' AND sl_no !=$com_code";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO job(jobcode,jobname,jobdetails,companycode,status,qualification) VALUES('$job_code','$job_name','$job_details',$com_code,1,'$job_qua')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {

            echo 111;
        }
    } else {
        echo 110;
    }
}
?>