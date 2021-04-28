


<?php


if (isset($_POST['name']) && isset($_POST['district']) && isset($_POST['address']) && isset($_POST['pincode']) && isset($_POST['dob']) && isset($_POST['qua']) && isset($_POST['phno'])) {


    // include Database connection file 
    include("../../db.php");

    $sl_no = $_POST['sl_no'];

    $name = $_POST['name'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $dob = $_POST['dob'];
    $qua = $_POST['qua'];
    $pincode = $_POST['pincode'];
    $phno = $_POST['phno'];

    $result1 = 123;
    if (isset($_FILES['cv']['name'])) {
        $fileName = $_FILES['cv']['name'];
        $target = "../../admin/cv/";
        $fileTarget = $target . $fileName;
        $tempFileName = $_FILES["cv"]["tmp_name"];
        move_uploaded_file($tempFileName, $fileTarget);
        $result1 = 222;
    }

  

    $check = "select * from userdetails where phno=$phno and userid!='$sl_no'";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "update userdetails set dob='$dob', qualification='$qua', address='$address', district='$district', pincode=$pincode, phno=$phno where userid= $sl_no";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {
            if ($result1 == 222) {
                $query1 = "update userdetails set cv='$fileName' where userid= $sl_no";
                if (!$result2 = mysqli_query($con, $query1)) {
                    exit(mysqli_error());
                    echo "some thing is wrong";
                }
            }
            $query2 = "update user set name='$name' where sl_no= $sl_no";
            if (!$result3 = mysqli_query($con, $query2)) {
                exit(mysqli_error());
                echo "some thing is wrong";
            }


            echo 111;
        }
    } else {
        echo 110;
    }
}
?>