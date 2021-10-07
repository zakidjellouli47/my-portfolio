<?php
    $servername =   'localhost';
    $username   =   'root';
    $password   =   '';
    $dbname     =   'cv2';
 
    $conn       =   mysqli_connect($servername, $username, $password, "$dbname");
    mysqli_set_charset($conn, "utf8");
    if($conn === false)
    {
        die("ERROR: Could not connect. " .mysqli_connect_error());
    }

    