<?php

$cv=$_GET['cv'];
    // Store the file name into variable

    $filepath = "./admin/cv/$cv";
    // Header content type
    header("Content-type: application/pdf");
    // Send the file to the browser.
    readfile($filepath);

 