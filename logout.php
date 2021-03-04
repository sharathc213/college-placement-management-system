<?php 

    session_start();
    session_destroy();

    echo "<script>window.open('index.php#login','_self')</script>";

?>