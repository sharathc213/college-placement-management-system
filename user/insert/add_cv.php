


<?php
if (isset($_POST['cv_name']) && isset($_POST['cv_ed']) && isset($_POST['cv_pincode'])  && isset($_POST['cv_district']) && isset($_POST['cv_ph']) && isset($_POST['formfile']) && isset($_POST['bday']) && isset($_POST['cv_address'])) {

    // include Database connection file 
    include("../../db.php");


    $cv_name = $_POST['cv_name'];
    $cv_ed = $_POST['cv_ed'];
    $cv_ph = $_POST['cv_ph'];
    $cv_pincode = $_POST['cv_pincode'];
    $cv_district = $_POST['cv_district'];
    $formfile = $_POST['formfile'];
    $bday=$_POST['bday'];
    $cv_address=$_POST['cv_address'];

    function randomPassword()
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }
    $password = randomPassword();

    $check = "select * from userdetails where  userid='$cv_name' ";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO userdetails (userid, dob, address, district, pincode, phno, qualification, cv) VALUES('$cv_name',$bday,'$cv_address','$cv_district',$cv_pincode,$cv_ph,'$cv_ed','$formfile')";
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