


<?php
if (isset($_POST['com_name']) && isset($_POST['email']) && isset($_POST['com_pincode'])  && isset($_POST['com_address'])  && isset($_POST['com_district'])&& isset($_POST['com_ph'])) {

    // include Database connection file 
    include("../../db.php");


    $com_name = $_POST['com_name'];
    $com_address = $_POST['com_address'];
    $email = $_POST['email'];
    $com_ph = $_POST['com_ph'];
    $com_pincode = $_POST['com_pincode'];
    $com_district = $_POST['com_district'];

    function randomPassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }
    $password = randomPassword();

    $check = "select * from company where email = '$email'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO company(companyname, district,email,password,pincode,address,phno) VALUES('$com_name','$com_district','$email','$password',$com_pincode,'$com_address',$com_ph)";
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