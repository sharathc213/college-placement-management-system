


<?php


if (isset($_POST['userid']) && isset($_POST['examid']) && isset($_POST['jobcode']) && isset($_POST['mark']) ) {


    // include Database connection file 
    include("../../db.php");

    $userid = $_POST['userid'];
    $examid= $_POST['examid'];
    $jobcode= $_POST['jobcode'];
    $mark = $_POST['mark'];
   







        $query = "update examuser set mark=$mark where userid= $userid && examid= $examid  && jobcode= '$jobcode'";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error());
            echo "some thing is wrong";
        } else {
          
            echo 111;
        }
    } 

?>