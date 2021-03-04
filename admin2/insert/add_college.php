


<?php
if (isset($_POST['college_code']) && isset($_POST['college_name']) && isset($_POST['college_email'])) {

    // include Database connection file 
    include("../../db.php");


    $college_code = $_POST['college_code'];
    $college_name = $_POST['college_name'];
    $college_email = $_POST['college_email'];

    function randomPassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }
    $password = randomPassword();

    $check = "select * from college where college_code = '$college_code' or email='$college_email'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO college(college_code, college_name,email,password) VALUES('$college_code','$college_name','$college_email','$password')";
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