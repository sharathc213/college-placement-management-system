


<?php

    // include Database connection file 
    include("../../db.php");

    $tname = $_POST['tname'];
    $comcode = $_POST['comcode'];

    $q1 = $_POST['q1'];
    $a1 = $_POST['a1'];
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
    $a13 = $_POST['a13'];
    $a14 = $_POST['a14'];

    $q2 = $_POST['q2'];
    $a2 = $_POST['a2'];
    $a21 = $_POST['a21'];
    $a22 = $_POST['a22'];
    $a23 = $_POST['a23'];
    $a24 = $_POST['a24'];

    $q3 = $_POST['q3'];
    $a3 = $_POST['a3'];
    $a31 = $_POST['a31'];
    $a32 = $_POST['a32'];
    $a33 = $_POST['a33'];
    $a34 = $_POST['a34'];
    

    $q4 = $_POST['q4'];
    $a4= $_POST['a4'];
    $a41 = $_POST['a41'];
    $a42 = $_POST['a42'];
    $a43 = $_POST['a43'];
    $a44 = $_POST['a44'];

    $q5 = $_POST['q5'];
    $a5 = $_POST['a5'];
    $a51 = $_POST['a51'];
    $a52 = $_POST['a52'];
    $a53 = $_POST['a53'];
    $a54 = $_POST['a54'];

    $check = "select * from exam where tname='$tname' and comcode =$comcode";
    $result_check = mysqli_query($con, $check);
    if (mysqli_num_rows($result_check) == 0) {



        $query = "INSERT INTO exam(comcode,tname,q1,q2,q3,q4,q5,a1,a2,a3,a4,a5,a11,a12,a13,a14,a21,a22,a23,a24,a31,a32,a33,a34,a41,a42,a43,a44,a51,a52,a53,a54) VALUES($comcode,'$tname','$q1','$q2','$q3','$q4','$q5',$a1,$a2,$a3,$a4,$a5,'$a11','$a12','$a13','$a14','$a21','$a22','$a23','$a24','$a31','$a32','$a33','$a34',
        '$a41','$a42','$a43','$a44','$a51','$a52','$a53','$a54')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {

            echo 111;
        }
    } else {
        echo 110;
    }

?>