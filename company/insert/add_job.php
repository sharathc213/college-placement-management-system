


<?php
if (isset($_POST['job_name']) && isset($_POST['job_details'])) {

    // include Database connection file 
    include("../../db.php");


    $job_name = $_POST['job_name'];
    $job_details = $_POST['job_details'];
   

    function randomPassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }
    $password = randomPassword();

    $check = "select * from job where jobname = '$job_name' or jobdetails= '$job_details'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO job(jobname,jobdetails) VALUES('$job_name','$job_details')";
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