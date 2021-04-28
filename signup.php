<?php
session_start();

include("db.php");



    $password = $_POST['password'];
    $username =$_POST['email'];
    $name =$_POST['name'];
  
  function signup($name,$username,$password,$con)
    {
  
       
        $check ="select * from user where name='$name' and password='$password' and email='$username'";
   


        
                $result_check = mysqli_query($con, $check);
                if (mysqli_num_rows($result_check) == 0) {
            
            
            
                    $query = "INSERT INTO user(email,password,name,status) VALUES('$username','$password','$name',1)";
                    if (!$result = mysqli_query($con, $query)) {
                        exit(mysqli_error());
                        echo "some thing is wrong";
                    } else {
                        $get_usr = "select * from user where email='$username'";
                        $result_usr = mysqli_query($con, $get_usr);
                         $row_usr=mysqli_fetch_array($result_usr);
                        $sl_no=$row_usr['sl_no'];
                        $query2 = "INSERT INTO userdetails(userid) VALUES($sl_no)";
                        if (!$result2 = mysqli_query($con, $query2)) {
                            exit(mysqli_error());
                            echo "some thing is wrong";
                        }else {
                        $_SESSION['user']="user";
                        $_SESSION['username']=$username;
                        echo 111;
                        }
                    }
                } else {
                    echo 110;
                }
    }

  


   signup($name,$username,$password,$con);
?>