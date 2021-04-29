


<?php
if (isset($_POST['job']) && isset($_POST['usr'])) {

    // include Database connection file 
    include("../../db.php");


    $usr = $_POST['usr'];
    $job = $_POST['job'];
  
    $checkf = "select * from user where sl_no=$usr and status=2";
    $result_checkf = mysqli_query($con, $checkf);
    if (mysqli_num_rows($result_checkf) == 0) {

    $check = "select * from jobuser where userid= $usr and jobid=$job";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO jobuser(userid,jobid,verify) VALUES($usr,$job,1)";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {

            echo 111;
        }
    } else {
        echo 110;
    }
}else{
    echo 118;
}
}
?>